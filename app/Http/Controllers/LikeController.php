<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request)
    {
        $request->validate([
            'member_id' => 'required',
        ]);

        $member = User::find($request->member_id);

        $existingLike = Like::where('user_id', Auth::id())->where('liked_user_id', $member->id)->first();

        if (!$existingLike) {
            $like = new Like();
            $like->user_id = Auth::id();
            $like->liked_user_id = $member->id;
            $like->save();

            // Increment likesReceived_count for the member user
            $member->increment('likes_count');
        }

        return response()->json($member->likes_count);
    }


}
