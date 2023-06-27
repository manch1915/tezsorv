<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Wall;
use Illuminate\Http\Request;

class WallController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        $walls = $user->walls()->with('user')->orderBy('created_at', 'desc')->get();
        return response()->json($walls);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $request->validate([
            'wall_user_id' => 'required',
            'body' => 'required',
        ]);

        $wall = Wall::create([
            'wall_user_id' => $request->wall_user_id,
            'body' => $request->body,
            'user_id' => auth()->user()->id
        ]);

        return response()->json([
            'message' => 'Wall created',
            'wall' => $wall
        ]);
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
