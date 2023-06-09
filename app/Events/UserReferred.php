<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class UserReferred
{
    use SerializesModels;

    public $referralId;
    public $user;

    public function __construct($referralId, $user)
    {
        $this->referralId = $referralId;
        $this->user = $user;
    }


    public function broadcastOn()
    {
        return [];
    }
}
