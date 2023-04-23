<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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

        if(!$member){
            return response()->json(['message' => 'Member not found']);
        }
        return response()->json($member);
    }

}
