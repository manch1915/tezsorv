<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'username' => $this->faker->userName(),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => Carbon::now(),
            'password' => bcrypt($this->faker->password()),
            'date_of_birth' => Carbon::now(),
            'country' => $this->faker->country(),
            'city' => $this->faker->city(),
            'about' => $this->faker->text(),
            'mobile_number' => $this->faker->phoneNumber(),
            'mobile_number_verified' => $this->faker->boolean(),
            'profile_picture' => 'https://i.imgur.com/PV7MSk9.png',
            'neo' => $this->faker->randomNumber(),
            'likes_count' => $this->faker->randomNumber(),
            'instagram' => $this->faker->word(),
            'telegram' => $this->faker->word(),
            'remember_token' => Str::random(10),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

            'sex_id' => 1,
        ];
    }
}
