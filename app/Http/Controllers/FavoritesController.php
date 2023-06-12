<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class FavoritesController extends Controller
{
    public function addToFavorites(Request $request)
    {
        $post = Post::findOrFail($request->input('thread_id'));
        $request->user()->toggleFavorite($post);

        return response()->json($request->user()->hasFavorited($post));
    }

}
