<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ReferralLink;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Yish\Imgur\Facades\Upload as Imgur;

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

    // Show member by ID for API
    public function showMember(int $id)
    {
        $member = User::find($id);

        if (!$member) {
            return response()->json(['message' => 'Member not found']);
        }

        $member->load('sex');
        $member['role'] = $member->getRoleNames()->last();

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
        $referralLink = ReferralLink::getReferral(auth()->id(), 1);
        $neoCount = auth()->user()->neo;
        $userRole = auth()->user()->getRoleNames()->last();

        return inertia('Main/AccountSettings/Upgrade', compact('referralLink', 'neoCount', 'userRole'));
    }

    public function avatarUpload(Request $request)
    {
        $avatar = $request->file('avatar');
        $user = auth()->user();

        if ($avatar->getClientOriginalExtension() === 'gif' && !$user->can('add-animated-pfp')) {
            return response()->json('Animated avatars are not allowed for your role');
        }

        $image = Imgur::upload($avatar);
        $user->profile_picture = $image->link();
        $user->save();

        return response()->json('Avatar uploaded successfully');
    }

    public function upgradeRole(Request $request)
    {
        $user = auth()->user();
        $neo = $user->neo;

        $roles = collect([
            ['role' => 'alfa', 'threshold' => 100],
            ['role' => 'beta', 'threshold' => 60],
            ['role' => 'delta', 'threshold' => 45],
            ['role' => 'gamma', 'threshold' => 30],
            ['role' => 'omega', 'threshold' => 15],
        ]);

        $role = $roles->first(function ($item) use ($neo) {
            return $neo >= $item['threshold'];
        });

        if ($role) {
            $user->assignRole($role['role']);
            return response()->json(['message' => 'Role upgraded successfully, your role is ' . $role['role']]);
        } else {
            return response()->json(['message' => 'You need to upgrade your account']);
        }
    }

    public function notificationsCount()
    {
        return response()->json(auth()->user()->unreadNotifications()->count());
    }
}
