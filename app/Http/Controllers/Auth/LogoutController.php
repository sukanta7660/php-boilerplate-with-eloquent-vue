<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;

class LogoutController extends Controller
{
    public function logout()
    {
        session_start();

        session_destroy();

        return redirect('/login');
    }
}
