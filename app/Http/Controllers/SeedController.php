<?php

namespace App\Http\Controllers;
use App\Database\Seeders\DatabaseSeeder;
use Exception;
use Faker\Factory;

class SeedController extends Controller
{
  public function run(): void
  {
      (new DatabaseSeeder())->run();
  }
}
