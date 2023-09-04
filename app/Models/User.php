<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Overtrue\LaravelFavorite\Traits\Favoriter;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Favoriter, HasRoles;

    protected $guarded = [];
    protected $hidden = ['password', 'remember_token'];
    protected $casts = ['email_verified_at' => 'datetime'];

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }

    public function likesReceived()
    {
        return $this->hasMany(Like::class, 'liked_user_id');
    }

    public function likesGiven()
    {
        return $this->hasMany(Like::class, 'user_id');
    }

    public function getReferrals()
    {
        return ReferralProgram::all()->map(function ($program) {
            return ReferralLink::getReferral($this, $program);
        });
    }

    //add credits
    public function addCredits($credits)
    {
        $this->neo += $credits;
        $this->save();
    }

    public function walls(): HasMany
    {
        return $this->hasMany(Wall::class, 'wall_user_id');
    }

    public function toSongArray()
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'created_at' => $this->created_at
        ];
    }
}
