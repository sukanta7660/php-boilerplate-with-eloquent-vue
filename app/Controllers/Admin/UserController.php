<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\User;

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
}