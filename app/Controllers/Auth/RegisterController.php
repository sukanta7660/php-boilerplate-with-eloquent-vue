<?php

namespace App\Controllers\Auth;

use App\Controllers\Controller;
use App\User;
use Respect\Validation\Validator;

class RegisterController extends Controller
{
    public function index() {
        return view('auth/register');
    }

    public function register()
    {
        session_start();
        
        $validate = new Validator();

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

        if(!empty($errors)) {
            $_SESSION['warning'] = 'Please fill the form with proper information';
            return redirect('/register');
        }

        $exists = User::where('email', $email)->first();

        if ($exists) {
            $_SESSION['warning'] = 'User already exists';
            return redirect('/register');

        }

        User::create([
            'name' => $name,
            'email' => $email,
            'contact_no' => $request->contact_no,
            'password' => md5($password)
        ]);
        
        $_SESSION['success'] = 'Registration successful. Please Login';
        return redirect('/login');
    }

    public function checkEligibility()
    {
        $request = user_inputs();

        $email = $request->email;

        if (filter_var($email, FILTER_VALIDATE_EMAIL)===false) {

            echo "error : You did not enter a valid email.";
        }

        $isExist = User::where('email', $email)->first();

        if ($isExist) {
            echo "<span style='color:red'> Email already exists .</span>";
            echo "<script>$('#submit').prop('disabled',true);</script>";
        } else{

            echo "<span style='color:green'> Email available for Registration .</span>";
            echo "<script>$('#submit').prop('disabled',false);</script>";
        }
    }

//    Admin
  public function adminRegisterPage()
  {
    return view('auth/admin-register');
  }

  public function adminRegister()
  {
    $request = user_inputs();
    $name = $request->name;
    $email = $request->email;
    $password = $request->password;

    $isCreated = User::create([
      'name' => $name,
      'email' => $email,
      'role' => 'admin',
      'password' => md5($password)
    ]);

    if (!$isCreated) {
      $_SESSION['warning'] = 'Something went wrong';
      return redirect('/admin-register');

    }

    $_SESSION['success'] = 'Registration successful. Please Login';
    return redirect('/admin-login');
  }
}
