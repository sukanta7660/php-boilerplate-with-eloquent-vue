<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        $data = ['user' => auth_user(), 'users' => User::all()];
        return $this->sendResponse($data,'Welcome to home page', true, 200);
        view('auth/login');
    }

    public function login(): void
    {
        $request = requests();

        $password = md5($request->password);

        $user = User::where('email', $request->email)
            ->where('password', $password)
            ->first()
        ;
        session_start();

        if (!$user) {
            $_SESSION['warning'] = 'Credential do not matched';
            redirect('/login');
        }

        $_SESSION['user'] = $user;

        redirect('/');
    }
}
