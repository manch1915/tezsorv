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
            ['name' => 'Physics', 'body' => 'This is the Physics category', 'icon' => 'PhysicsIcon'],
            ['name' => 'Chemistry', 'body' => 'This is the Chemistry category', 'icon' => 'ChemistryIcon'],
            ['name' => 'Mathematics', 'body' => 'This is the Mathematics category', 'icon' => 'MathematicsIcon'],
            ['name' => 'Biology', 'body' => 'This is the Biology category', 'icon' => 'BiologyIcon'],
            ['name' => 'History', 'body' => 'This is the History category', 'icon' => 'HistoryIcon'],
            ['name' => 'Geography', 'body' => 'This is the Geography category', 'icon' => 'GeographyIcon'],
            ['name' => 'Literature', 'body' => 'This is the Literature category', 'icon' => 'LiteratureIcon'],
            ['name' => 'Art', 'body' => 'This is the Art category', 'icon' => 'ArtIcon'],
            ['name' => 'Music', 'body' => 'This is the Music category', 'icon' => 'MusicIcon'],
            ['name' => 'Computer Science', 'body' => 'This is the Computer Science category', 'icon' => 'ComputerScienceIcon'],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'body' => $category['body'],
                'icon' => $category['icon'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
