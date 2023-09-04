<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Resources\UserResource;
use App\Models\ReferralLink;
use App\Models\User;
use Illuminate\Http\Request;
use Yish\Imgur\Facades\Upload as Imgur;

class MainController extends Controller
{
    protected $views = [
        'index' => 'Main/Main',
        'member' => 'Main/MainProfile',
        'personalDetails' => 'Main/AccountSettings/PersonalDetails',
        'contactDetails' => 'Main/AccountSettings/ContactDetails',
        'security' => 'Main/AccountSettings/Security'
    ];

    public function __call($method, $parameters)
    {
        if (array_key_exists($method, $this->views)) {
            return inertia($this->views[$method]);
        }

        return parent::__call($method, $parameters);
    }

    public function showMember(string $username)
    {
        $member = User::where('username', $username)->first();

        if (!$member) {
            return response()->json(['message' => 'Member not found']);
        }

        $member->load('sex');
        $member['role'] = $member->getRoleNames()->last();

        return new UserResource($member);
    }

    public function upgrade()
    {
        return inertia('Main/AccountSettings/Upgrade', [
            'referralLink' => ReferralLink::getReferral(auth()->id(), 1),
            'neoCount' => auth()->user()->neo,
            'userRole' => auth()->user()->getRoleNames()->last()
        ]);
    }

    public function avatarUpload(Request $request)
    {
        $avatar = $request->file('avatar');
        if ($avatar->getClientOriginalExtension() === 'gif' && !auth()->user()->can('add-animated-pfp')) {
            return response()->json('Animated avatars are not allowed for your role');
        }

        auth()->user()->update([
            'profile_picture' => Imgur::upload($avatar)->link()
        ]);

        return response()->json('Avatar uploaded successfully');
    }

    public function upgradeRole(Request $request)
    {
        $user = auth()->user();

        $role = Role::where('threshold', '<=', $user->neo)->orderBy('threshold', 'desc')->first();

        if ($role) {
            $user->assignRole($role['name']);
            return response()->json(['message' => 'Role upgraded successfully, your role is ' . $role['name']]);
        }

        return response()->json(['message' => 'You need to upgrade your account']);
    }

    public function notificationsCount()
    {
        return response()->json(['count' => auth()->user()->unreadNotifications()->count()]);
    }
}
