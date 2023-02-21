<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CheatSheetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 1; $i <= 5; $i++) {
            $header = $faker->sentence;
            $body = $faker->paragraph;
            $picture = $faker->imageUrl(640, 480, 'cats');
            $file = $faker->fileExtension;
            $category_id = $faker->numberBetween(1, 10);

            DB::table('cheat_sheets')->insert([
                'header' => $header,
                'body' => $body,
                'picture' => $picture,
                'file' => $file,
                'categories_id' => $category_id,
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => $faker->dateTimeBetween('-1 year', 'now')
            ]);
        }
    }
}
