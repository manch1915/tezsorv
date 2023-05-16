<?php

namespace App\Http\Controllers;
use App\Http\Requests\ThreadStoreRequest;
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

    public function fetchUrl(Request $request)
    {

        $url = $request->input('url');
        $html = file_get_contents($url);

        $title = '';
        $description = '';
        $image = '';

        if ($html !== false) {
            $doc = new DOMDocument();
            libxml_use_internal_errors(true);
            $doc->loadHTML($html);
            $xpath = new DOMXPath($doc);
            $title = $xpath->query('//meta[@property="og:title"]/@content')->item(0)->nodeValue;
            $description = $xpath->query('//meta[@property="og:description"]/@content')->item(0)->nodeValue;
            $image = $xpath->query('//meta[@property="og:image"]/@content')->item(0)->nodeValue;

            // Do something with the title, description, and image
        }

        $arr = [
            'success' => 1,
            'meta' => [
                'title' => $title,
                'description' => $description,
                'image' => [
                    'url' => $image,
                    ],],
        ];
        return response()->json($arr);
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        $image = Imgur::upload($file);

        $arr = [
            'success' => 1,
            'file' => [
                'url' => $image->link(),
                ],
        ];

        return response()->json($arr);
    }

    public function storeThread(ThreadStoreRequest $request){
        $request->validated();
        $thread = Post::create([
            'title' => $request->title,
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'category_id' => $request->category,
            'subcategory_id' => $request->subcategory
            ]);

//        return redirect()->route('thread', $thread->id);
        return response()->json($thread);
    }

    public function show( $category, $subcategory){
        //if == NaN, return all posts
        if ($category == "NaN" && $subcategory == "NaN") {
            // If both category and subcategory are null, return the last 20 posts
            $posts = Post::with('user')->orderBy('created_at', 'desc')->limit(20)->get();
        } else {
            // Otherwise, filter the posts by category and subcategory
            $posts = Post::where('category_id', $category)
                ->where('subcategory_id', $subcategory)->with('user')
                ->get();
        }

        return response()->json($posts);
    }

    public function showThread($id){
        $thread = Post::with('user', 'subcategory', 'category')->find($id);
        return inertia('Main/ThreadView', ['thread' => $thread]);
    }

    public function showThreads()
    {
        return inertia('Main/Main');
    }
}
