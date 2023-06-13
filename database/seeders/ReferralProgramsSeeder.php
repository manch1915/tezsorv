<?php

namespace Database\Seeders;

use App\Models\ReferralProgram;
use Illuminate\Database\Seeder;

class ReferralProgramsSeeder extends Seeder
{
    public function run(): void
    {
        ReferralProgram::create(['name' => 'Sign-up Bonus', 'uri' => 'register']);
    }
}
