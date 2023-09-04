<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function index()
    {
        $users = User::get(['id', 'username', 'created_at'])->map->toSongArray();
        return inertia('Admin/Index', ['users' => $users]);
    }

}
