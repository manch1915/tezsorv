<?php

namespace App\Http\Controllers;
use App\Http\Requests\ThreadStoreRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\Subcategory;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Yish\Imgur\Facades\Upload as Imgur;

class ThreadController extends Controller
{
    protected function authorizeThreadCreation()
    {
        abort_unless(auth()->user()->can('create-threads'), 403, 'Դուք չեք կարող ստեղծել նոր հոդված');
    }

    protected function createThreadFromValidatedRequestData(array $validatedData): Post
    {
        return Post::create($this->formatThreadData($validatedData));
    }

    private function formatThreadData(array $validatedData): array
    {
        return [
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'user_id' => auth()->id(),
            'category_id' => $validatedData['category'],
            'subcategory_id' => $validatedData['subcategory'],
        ];
    }

    public function newThread()
    {
        return inertia('Main/Thread');
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        $image = Imgur::upload($file);
        return response()->json(['url' => $image->link()]);
    }

    public function storeThread(ThreadStoreRequest $request): array
    {
        $this->authorizeThreadCreation();

        $thread = $this->createThreadFromValidatedRequestData($request->validated());

        return ['redirect' => route('thread.view', $thread->id)];
    }

    public function show(?int $category = null, ?int $subcategory = null)
    {
        $posts = [];

        $query = Post::with('user')->orderBy('created_at', 'desc');
        $posts['data'] = $this->buildPostsQuery($query, $category, $subcategory)->paginate(10);

        return response()->json($posts);
    }

    private function buildPostsQuery($query, int $category = null, int $subcategory = null)
    {
        if (!is_null($category)) {
            $query->where('category_id', $category);
            $posts['category'] = Category::findOrFail($category)->name;
        }

        if (!is_null($subcategory)) {
            $query->where('subcategory_id', $subcategory);
        }

        return $query;
    }

    public function showThread($id)
    {
        return inertia('Main/ThreadView', $this->prepareThreadData($id));
    }

    private function prepareThreadData($id): array
    {
        $thread = $this->getThreadWithDependencies($id);

        if (!$this->hasThreadCookie($id)) {
            $this->increaseThreadViewsAndQueueCookie($thread, $id);
        }

        return [
            'thread' => $thread,
            'hasFavorite' => $this->checkUserFavorite($thread),
            'comments' => $this->populateRepliesToComments($this->getThreadComments($thread))
        ];
    }

    private function populateRepliesToComments($comments)
    {
        foreach ($comments as $comment) {
            if ($comment->replies->isNotEmpty()) {
                $comment->replies = $this->fetchRepliesForComment($comment);
            }
        }

        return $comments;
    }

    public function getThreadWithDependencies($id)
    {
        return Post::with('user', 'subcategory', 'category')->findOrFail($id);
    }

    public function hasThreadCookie($id)
    {
        return Cookie::has('thread-' . $id);
    }

    public function increaseThreadViewsAndQueueCookie($thread, $id)
    {
        $thread->increment('views');
        Cookie::queue('thread-' . $id, true, 60);
        $thread->save();
    }

    public function checkUserFavorite($thread)
    {
        return auth()->user()?->hasFavorited($thread) ?? false;
    }

    public function getThreadComments($thread)
    {
        return $thread->comments()->where('comment_id', null)->with('user', 'replies.user')->get();
    }

    public function fetchRepliesForComment($comment)
    {
        $replies = $comment->replies()->with('user', 'replies.user')->get();

        if ($replies->isNotEmpty()) {
            foreach ($replies as $reply) {
                $reply->replies = $this->fetchRepliesForComment($reply);
            }
        }

        return $replies;
    }

    public function showThreads()
    {
        return inertia('Main/Main');
    }

    public function showFavorites()
    {
        $favorites = auth()->user()?->getFavoriteItems(Post::class)->with('user', 'subcategory', 'category')->get();

        return inertia('Main/Favorites', compact('favorites'));
    }
}
