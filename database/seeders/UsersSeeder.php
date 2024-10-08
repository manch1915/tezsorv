<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'gender_id' => 1,
                'status_id' => 1,
                'password' => 'admin',
            ],
            [
                'username' => 'user',
                'email' => 'user@gmail.com',
                'gender_id' => 2,
                'status_id' => 2,
                'password' => 'user',
            ]
        ];

        foreach($users as $user)
        {
            User::create([
                'username' => $user['username'],
                'gender_id' => $user['gender_id'],
                'status_id' => $user['status_id'],
                'email' => $user['email'],
                'password' => Hash::make($user['password'])
            ]);
        }
    }
}
