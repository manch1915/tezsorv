<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\ReferralLink;
use App\Models\ReferralProgram;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    //show member by id for api
    public function showMember(int $id)
    {
        $member = User::find($id);
        $member['sex'] = $member->sex;
        $member['role'] = $member->getRoleNames()->last();
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
        $referralLink = ReferralLink::getReferral(auth()->user()->id, 1);
        $neoCount = auth()->user()->neo;
        $userRole = auth()->user()->getRoleNames()->last();
        return inertia('Main/AccountSettings/Upgrade', ['referralLink' => $referralLink, 'neoCount' => $neoCount,  'userRole' => $userRole]);
    }

    public function avatarUpload(Request  $request)
    {

        $avatar = $request->file('avatar');
        if ($avatar->getClientOriginalExtension() === 'gif' && !auth()->user()->can('add-animated-pfp')){
            return response()->json('Animated avatars are not allowed for your role');
        }

        $image = Imgur::upload($avatar);
        $user = auth()->user();
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
}
