<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class ReferralLink extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'referral_program_id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function (ReferralLink $model) {
            $model->generateCode();
        });
    }

    private function generateCode()
    {
        $this->attributes['code'] = (string)Uuid::uuid1();
    }

    public static function getReferral($user, $program)
    {
        return static::firstOrCreate([
            'user_id' => $user,
            'referral_program_id' => $program
        ]);
    }

    public function getLinkAttribute()
    {
        return sprintf("%s?ref=%s", url($this->program->uri), $this->code);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function program()
    {
        return $this->belongsTo(ReferralProgram::class, 'referral_program_id');
    }

    public function relationships()
    {
        return $this->hasMany(ReferralRelationship::class);
    }
}
