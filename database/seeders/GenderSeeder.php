<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genders = [
            ['name' => 'female'],
            ['name' => 'male'],
            ['name' => 'other'],
            ['name' => 'giga chad'],
            ['name' => 'sigma'],
        ];

        foreach ($genders as $gender) {
            Gender::create($gender);
        }
    }
}
