<?php

namespace App\Listeners;

use App\Events\UserReferred;
use App\Models\ReferralLink;
use App\Models\ReferralRelationship;
use App\Notifications\ReferalBonus;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RewardUser
{
    public function __construct(){
        //
    }

    public function handle(UserReferred $event)
        {
            $referral = ReferralLink::find($event->referralId);
            if (!is_null($referral)) {
                ReferralRelationship::create(['referral_link_id' => $referral->id, 'user_id' => $event->user->id]);

                // Example...
                if ($referral->program->name === 'Sign-up Bonus') {

                    // User who was sharing link
                    $provider = $referral->user;
                    $provider->addCredits(15);

                    // User who used the link
                    $user = $event->user;
                    $user->addCredits(20);

                    $provider->notify(new ReferalBonus($user));
                }

            }
        }
}
