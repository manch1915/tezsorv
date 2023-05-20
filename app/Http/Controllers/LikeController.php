<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Request $request){
        $request->validate([
            'member_id' => 'required',
            ]
        );
        $member = User::find($request->member_id);
        $member->likes()->attach(Auth::id());
        return response()->json($member);
    }
}
