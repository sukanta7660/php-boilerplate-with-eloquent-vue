<?php

namespace App\Controllers\Auth;
use App\User;
use App\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout()
    {
        session_start();

        session_destroy();

        return redirect('/login');
    }
}