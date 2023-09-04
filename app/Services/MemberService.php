<?php

namespace App\Services;

use App\Models\Like;
use App\Models\User;
use App\Notifications\UserLiked;
use Illuminate\Support\Facades\Auth;

class MemberService
{
    protected User $userModel;
    protected Like $likeModel;

    public function __construct(User $userModel, Like $likeModel)
    {
        $this->userModel = $userModel;
        $this->likeModel = $likeModel;
    }

    public function likeMember($memberId): array
    {
        $member = $this->userModel->find($memberId);
        if (!$member) {
            return ['error' => true, 'message' => 'Member not found'];
        }

        $userId = Auth::id();
        $existingLike = $this->likeModel->where([
            ['user_id', $userId],
            ['liked_user_id', $member->id]
        ])->first();

        if (!$existingLike) {
            $like = $this->likeModel->create([
                'user_id' => $userId,
                'liked_user_id' => $member->id
            ]);

            // Increment likes_count for the member user
            $member->increment('likes_count');
            $member->notify(new UserLiked($like));
        }

        return ['error' => false, 'likes_count' => $member->likes_count];
    }
}
