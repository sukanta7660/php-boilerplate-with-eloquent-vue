<?php

namespace App\Database\Factories;

use App\Models\User;

class UserFactory
{
    public static function create($count = 10): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= $count; $i++) {
            User::create([
                'name'        => $faker->name,
                'email'       => $faker->unique()->email,
                'password'    => md5(123456),
                'role'        => $faker->randomElement(['admin', 'user']),
            ]);
        }
    }
}
