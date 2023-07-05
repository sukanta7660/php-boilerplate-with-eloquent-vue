<?php

namespace App\Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    public function definition() :array
    {
        /**
         * Define the model's default state.
         *
         * @return array
         */
        return [
            'name'        => $this->faker->name,
            'email'       => $this->faker->unique()->email,
            'password'    => md5(123456),
            'is_approved' => $this->faker->randomElement([true, false]),
            'role'        => $this->faker->randomElement(['admin', 'user']),
        ];
    }
}
