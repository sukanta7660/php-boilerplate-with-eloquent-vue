<?php

namespace App\Controllers\Auth;
use App\User;
use App\Controllers\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function loginAction()
    {
        $request = user_inputs();

        $password = md5($request->password);

        $user = User::where('email', $request->email)
            ->where('password', $password)
            ->first()
        ;

        if (!$user) {
            return redirect('/login');
        }

        session_start();

        $_SESSION['user'] = $user;

        $userRole = $_SESSION['user']['role'];

        if ($userRole == 'admin') {
            return redirect('/admin/dashboard');
        }else {
            return redirect('/');
        }
    }
}