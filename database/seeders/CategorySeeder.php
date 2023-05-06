<?php

namespace Database\Seeders;

use App\Models\Category;
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
        //todo write seeder for
        $categories = [
            ['name' => 'Ֆիզիկա'],
            ['name' => 'Փիլիսոփայություն'],
            ['name' => 'Քիմիյա'],
            ['name' => 'Մաթեմատիկա'],
            ['name' => 'Պատմություն'],
            ['name' => 'Վեբ ծրագրավորում'],
            ['name' => 'Ծրագրավորում'],
            ['name' => 'Գրաֆիկա'],
            ['name' => 'Խառը'],
            ['name' => 'Ձրի'],
            ['name' => 'Ծառայություններ'],
            ['name' => 'Սոֆթ'],
            ['name' => 'Օֆտոպիկ'],
            ['name' => 'Ֆորումի կյանքը']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
