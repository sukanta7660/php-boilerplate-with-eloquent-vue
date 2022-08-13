<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\User;
use Respect\Validation\Validator;

class UserController extends Controller
{
  public function index()
  {
    $users = User::where('role', 'user')->get();
    return view('admin/users/users/index', ['users' => $users]);
  }

  public function activeInactive($id = null)
  {
    if ($id == null) {
      return false;
    }

    $user = User::find($id);

    if ($user->is_approved == 1) {
      $user->update(['is_approved' => 0]);
      $_SESSION['warning'] = 'This user is deactivated';
      if ($user->role == 'admin') {
        return redirect('/admin/users/admins');
      }
      return redirect('/admin/users');
    }

    $user->update(['is_approved' => 1]);
    $_SESSION['success'] = 'This user is activated';
    if ($user->role == 'admin') {
      return redirect('/admin/users/admins');
    }
    return redirect('/admin/users');
  }

  public function admin()
  {
    $users = User::where('role', 'admin')->get();
    return view('admin/users/admin/index', ['users' => $users]);
  }

  public function create()
  {
    return view('admin/users/admin/create');
  }

  public function store()
  {$validate = new Validator();

    $errors = [];
    $request = user_inputs();
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;

    if ($validate::alpha(' ')->validate($name) === false) {
      $errors['name'] = 'Name can only contains alphabets or space.';
    }

    if ($validate::email()->validate($email) === false) {
      $errors['email'] = 'Email must be a valid email.';
    }

    if (strlen($password) < 6) {
      $errors['password'] = 'Password must have at least 6 Characters.';
    }

    $exists = User::where('email', $email)->first();

    if ($exists) {

      $_SESSION['warning'] = 'This user already exists';
      return redirect('/admin/users/admins');

    }

    User::create([
      'name' => $name,
      'email' => $email,
      'contact_no' => $request->contact_no,
      'password' => md5($password),
      'role' => 'admin'
    ]);
    $_SESSION['success'] = 'A new Admin is created';
    return redirect('/admin/users/admins');
  }
}