<?php

namespace App\Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        $defaultUserExists = User::where('email', 'admin@gmail.com')->first();

        if (!$defaultUserExists) {
            User::create([
                'name'        => 'Admin User',
                'email'       => 'admin@gmail.com',
                'password'    => md5(123456),
                'is_approved' => true,
                'role'        => 'admin',
            ]);
        }

        User::factory()->count(10)->create();
    }

}
