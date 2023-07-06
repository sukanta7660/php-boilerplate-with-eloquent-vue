<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth/login');
    }

    public function login()
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
            return redirect('/login');
        }

        if ($user->is_approved == 0) {
          $_SESSION['warning'] = 'Your account is not active. Please contact with our support team.';
          return redirect('/login');
        }

        $_SESSION['user'] = $user;

        $userRole = $_SESSION['user']['role'];

        if ($userRole == 'admin') {
            $_SESSION['success'] = 'Logged in successful';
            return redirect('/admin/dashboard');
        }else {
            $_SESSION['success'] = 'Logged in successful';
            return redirect('/profile');
        }
    }

  public function adminLoginPage()
  {
    return view('auth/admin-login');
  }

  public function adminLoginAction()
  {
    $request = requests();

    $password = md5($request->password);

    $user = User::where('email', $request->email)
      ->where('password', $password)
      ->where('role', 'admin')
      ->first()
    ;
    session_start();

    if (!$user) {
      $_SESSION['warning'] = 'Credential do not matched';
      return redirect('/admin-login');
    }

    if ($user->is_approved == 0) {
      $_SESSION['warning'] = 'Your account is not active. Please contact with our support team.';
      return redirect('/login');
    }

    $_SESSION['user'] = $user;

    $userRole = $_SESSION['user']['role'];

    if ($userRole == 'admin') {
      $_SESSION['success'] = 'Logged in successful';
      return redirect('/admin/dashboard');
    }else {
      $_SESSION['success'] = 'Logged in successful';
      return redirect('/profile');
    }
  }
}
