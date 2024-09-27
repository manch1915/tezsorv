<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThreadStoreRequest;
use App\Models\Category;
use App\Models\Post;
use DOMDocument;
use DOMXPath;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThreadController extends Controller
{
    public function newThread()
    {
        $slideList = Category::with('subcategories')->get();

        return inertia('Main/Thread',
            ['slideList' => $slideList]
        );
    }

    public function fetchUrl(Request $request)
    {
        $url = $request->input('url');
        $title = '';
        $description = '';
        $image = '';

        try {
            // Validate URL first
            if (! filter_var($url, FILTER_VALIDATE_URL)) {
                return response()->json([
                    'success' => 0,
                    'message' => 'Invalid URL provided',
                ], 400);
            }

            // Use file_get_contents with error handling via stream_context
            $context = stream_context_create(['http' => ['timeout' => 5]]);
            $html = file_get_contents($url, false, $context);

            if ($html !== false) {
                $doc = new DOMDocument;
                libxml_use_internal_errors(true);
                $doc->loadHTML($html);
                $xpath = new DOMXPath($doc);

                $titleNode = $xpath->query('//meta[@property="og:title"]/@content')->item(0);
                if ($titleNode) {
                    $title = $titleNode->nodeValue;
                }

                $descriptionNode = $xpath->query('//meta[@property="og:description"]/@content')->item(0);
                if ($descriptionNode) {
                    $description = $descriptionNode->nodeValue;
                }

                $imageNode = $xpath->query('//meta[@property="og:image"]/@content')->item(0);
                if ($imageNode) {
                    $image = $imageNode->nodeValue;
                }
            } else {
                // Return error if the content could not be fetched
                return response()->json([
                    'success' => 0,
                    'message' => 'Failed to retrieve content from the URL',
                ], 500);
            }
        } catch (\Exception $e) {
            // Handle any other exceptions like network issues
            return response()->json([
                'success' => 0,
                'message' => 'Error fetching URL: '.$e->getMessage(),
            ], 500);
        }

        // Prepare response
        return response()->json([
            'success' => 1,
            'meta' => [
                'title' => $title,
                'description' => $description,
                'image' => ['url' => $image],
            ],
        ]);
    }

    public function uploadFile(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust rules as needed
        ]);

        $userId = $request->user()->id;

        $file = $request->file('image');

        $imageName = uniqid().'.'.$file->extension();

        $path = "images/{$userId}";

        $filePath = $file->storeAs($path, $imageName, 'public');

        $arr = [
            'success' => 1,
            'file' => [
                'url' => Storage::url($filePath),
            ],
        ];

        return response()->json($arr);
    }

    public function storeThread(ThreadStoreRequest $request)
    {
        $request->validated();

        $thread = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory,
        ]);

        return redirect()->route('thread.view', $thread->id);
    }

    public function show(?int $category = null, ?int $subcategory = null)
    {
        $query = Post::with('user')->orderBy('created_at', 'desc');

        if ($category !== null) {
            $query->where('category_id', $category);
            $posts['category'] = Category::find($category)->name;
        }

        if ($subcategory !== null) {
            $query->where('subcategory_id', $subcategory);
        }

        $posts['data'] = $query->limit(20)->get();

        return response()->json($posts);
    }

    public function showThread($id)
    {
        $thread = Post::with('user', 'subcategory', 'category')->find($id);

        return inertia('Main/ThreadView', ['thread' => $thread]);
    }

    public function showThreads()
    {
        return inertia('Main/Main');
    }
}
