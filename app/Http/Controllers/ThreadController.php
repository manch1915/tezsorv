<?php

namespace App\Http\Controllers;
use App\Http\Requests\ThreadStoreRequest;
use App\Models\Category;
use App\Models\Post;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Yish\Imgur\Facades\Upload as Imgur;

class ThreadController extends Controller
{
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
        if (!auth()->user()->can('create-threads')) {
            abort(403, 'Դուք չեք կարող ստեղծել նոր հոդված');
        }

        $validatedData = $request->validated();
        $thread = Post::create([
            'title' => $validatedData['title'],
            'body' => $validatedData['body'],
            'user_id' => auth()->id(),
            'category_id' => $validatedData['category'],
            'subcategory_id' => $validatedData['subcategory'],
        ]);

        return ['redirect' => route('thread.view', $thread->id)];
    }

    public function show(?int $category = null, ?int $subcategory = null)
    {
        $query = Post::with('user')->orderBy('created_at', 'desc');

        if ($category !== null) {
            $query->where('category_id', $category);
            $posts['category'] = Category::findOrFail($category)->name;
        }

        if ($subcategory !== null) {
            $query->where('subcategory_id', $subcategory);
        }

        $posts['data'] = $query->limit(20)->get();

        return response()->json($posts);
    }

    public function showThread($id)
    {
        $thread = Post::with('user', 'subcategory', 'category')->findOrFail($id);
        $hasFavorite = auth()->user()?->hasFavorited($thread) ?? false;

        return inertia('Main/ThreadView', compact('thread', 'hasFavorite'));
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
