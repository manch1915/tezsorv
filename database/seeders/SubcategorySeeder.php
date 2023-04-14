<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //todo write seeder for sub
        $subcategories = [
            ['name' => 'Smartphones', 'name_hy' => '' , 'category_id' => 1],
        ];

        foreach ($subcategories as $subcategory) {
            Subcategory::create($subcategory);
        }

    }
}
