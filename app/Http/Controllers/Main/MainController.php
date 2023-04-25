<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MainController extends Controller
{
    public function index()
    {
        return inertia('Main/Main');
    }

    public function member()
    {
        return inertia('Main/MainProfile');
    }

    //show member by id for api
    public function showMember(int $id)
    {
        $member = User::find($id);
        $member['status'] = $member->status;
        $member['sex'] = $member->sex;

        if (!$member) {
            return response()->json(['message' => 'Member not found']);
        }
        return response()->json($member);
    }

    public function personalDetails()
    {
        return inertia('Main/AccountSettings/PersonalDetails');
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

    public function avatarUpload(Request  $request)

    {

        $image = $request->file('avatar');

        Imgur::setHeaders([
            'headers' => [
                'authorization' => 'Client-ID ' . env('IMGUR_CLIENT_ID'),
                'content-type' => 'application/x-www-form-urlencoded',
            ]
        ])->setFormParams([
            'form_params' => [
                'image' => $image,
            ]
        ])->upload($image);

        $user = auth()->user();
        $user->profile_picture = $body->data->link;
        $user->save();
        return response()->json('Avatar uploaded successfully');
    }


}
