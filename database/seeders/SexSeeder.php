<?php

namespace Database\Seeders;

use App\Models\Sex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sexes = [
            ['name' => 'female'],
            ['name' => 'male'],
            ['name' => 'other'],
            ['name' => 'giga chad'],
            ['name' => 'sigma'],
        ];

        foreach ($sexes as $sex) {
            Sex::create($sex);
        }
    }
}
