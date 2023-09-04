<?php

namespace App\Http\Controllers;

use App\Services\MemberService;
use Illuminate\Http\Request;

class LikeController extends Controller
{
    protected $memberService;

    public function __construct(MemberService $memberService)
    {
        $this->memberService = $memberService;
    }

    public function like(Request $request)
    {
        $validatedData = $request->validate([
            'member_id' => 'required|exists:users,id',
        ]);

        $memberLikeInfo = $this->memberService->likeMember($validatedData['member_id']);

        if ($memberLikeInfo['error']) {
            return response()->json(['message' => $memberLikeInfo['message']], 404);
        }

        return response()->json($memberLikeInfo['likes_count']);
    }
}
