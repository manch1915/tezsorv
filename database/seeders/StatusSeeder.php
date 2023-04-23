<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sexes = [
            ['name' => 'user'],
            ['name' => 'admin'],
            ['name' => 'legend'],
            ['name' => 'op'],
            ['name' => 'sigma'],
        ];
        //todo change names
        foreach ($sexes as $sex) {
            Status::create($sex);
        }
    }
}
