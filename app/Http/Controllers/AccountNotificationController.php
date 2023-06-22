<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class AccountNotificationController extends Controller
{
    public function show()
    {
        $notifications = auth()->user()->notifications()->get();
        return Inertia::render('Main/Notifications', ['notifications' => $notifications]);
    }
}
