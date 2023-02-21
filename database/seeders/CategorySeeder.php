<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Physics'],
            ['name' => 'Chemistry'],
            ['name' => 'Mathematics'],
            ['name' => 'Biology', ],
            ['name' => 'History', ],
            ['name' => 'Geography', ],
            ['name' => 'Literature', ],
            ['name' => 'Art' ],
            ['name' => 'Music'],
            ['name' => 'Computer Science'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
