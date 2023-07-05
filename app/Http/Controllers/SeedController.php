<?php

namespace App\Http\Controllers;
use Exception;
use Faker\Factory;

class SeedController extends Controller
{
  public function seedUsers()
  {
    try {
      $user = \App\Models\User::create([
        'name'        => 'Admin User',
        'email'       => 'admin@gmail.com',
        'password'    => md5(123456),
        'is_approved' => true,
        'role'        => 'admin',
      ]);

      $faker = Factory::create();

      for($i = 0; $i < 10; $i++) {
        \App\Models\User::create([
          'name'        => $faker->name,
          'email'       => $faker->unique()->email,
          'password'    => md5(123456),
          'is_approved' => $faker->randomElement([true, false]),
          'role'        => $faker->randomElement(['admin', 'user']),
        ]);
      }
      session_start();
      $_SESSION['success'] = 'database seed complete';
      return redirect('/');
    } catch(Exception $exception) {
      print_r($exception);
    }
  }
}
