<?php

namespace App\Controllers;

class ProfileController extends Controller
{
  public function index()
  {
    return view('profile/profile');
  }
}