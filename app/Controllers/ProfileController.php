<?php

namespace App\Controllers;

use App\User;

class ProfileController extends Controller
{
  public function index()
  {
    return view('profile/profile');
  }

  public function profileUpdate()
  {
    $request = user_inputs();
    $auth = User::where('id', $request->id)->first();
    $auth->update([
      'name' => $request->name,
      'email' => $request->email,
      'address' => $request->address,
      'contact_no' => $request->contact_no,
    ]);
    $_SESSION['user'] = $auth;
    $_SESSION['success'] = 'Profile Successfully updated';
    return redirect('/profile');
  }

  public function passwordChange()
  {
    $request = user_inputs();
    $auth = User::where('id', $request->id)->first();
    $oldPassword = $auth->password;
    $oldPasswordFromUser = md5($request->current_password);

    if ($oldPassword != $oldPasswordFromUser) {
      $_SESSION['warning'] = 'Your current password is wrong';
      return redirect('/profile');
    }

    if ($request->new_password != $request->confirm_password) {
      $_SESSION['warning'] = 'New password and confirm password must be same';
      return redirect('/profile');
    }
    $auth->update([
      'password' => md5($request->new_password)
    ]);
    $_SESSION['user'] = $auth;
    $_SESSION['success'] = 'Password Successfully changed';
    return redirect('/profile');
  }
}