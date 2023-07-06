<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index() {
        view('welcome', [
            'user' => auth_user()
        ]);
    }
}
