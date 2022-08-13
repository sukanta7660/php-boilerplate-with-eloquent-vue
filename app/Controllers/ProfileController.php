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

    $_SESSION['success'] = 'Profile Successfully updated';
    return redirect('/profile');
  }
}