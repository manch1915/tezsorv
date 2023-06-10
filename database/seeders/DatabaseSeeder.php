<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            SexSeeder::class,
            UsersSeeder::class,
            CategorySeeder::class,
            SubcategorySeeder::class,
            RoleAndPermissionSeeder::class,
            ]);
    }
}
