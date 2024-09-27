<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gender;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::with('subcategories')->get();

        return inertia('Main/Main', [
            'categories' => $categories,
        ]);
    }

    public function member(Request $request, $id)
    {
        $member = User::findOrFail($id)->with(['status', 'gender'])->first();

        return inertia('Main/MainProfile',
            ['member' => $member]);
    }

    public function personalDetails()
    {
        $genders = Gender::all();

        return inertia('Main/AccountSettings/PersonalDetails',
            ['genders' => $genders]
        );
    }

    public function contactDetails()
    {
        return inertia('Main/AccountSettings/ContactDetails');
    }

    public function security()
    {
        return inertia('Main/AccountSettings/Security');
    }

    public function upgrade()
    {
        return inertia('Main/AccountSettings/Upgrade');
    }

    public function avatarUpload(Request $request)
    {
        $file = $request->file('avatar');

        $imageName = uniqid().'.'.$file->extension();

        $userId = $request->user()->id;

        $path = "images/{$userId}/avatar";

        $filePath = $file->storeAs($path, $imageName, 'public');

        $user = auth()->user();
        $user->profile_picture = $filePath;
        $user->save();

        return response()->json('Avatar uploaded successfully');
    }
}
