<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Respect\Validation\Validator;

class RegisterController extends Controller
{
    public function index(): void
    {
        view('auth/register');
    }

    /**
     * @throws Exception
     */
    public function register(): void
    {
        session_start();

        $validate = new Validator();

        $errors = [];
        $request = requests();
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
            redirect('/register');
        }

        $exists = User::where('email', $email)->first();

        if ($exists) {
            $_SESSION['warning'] = 'User already exists';
            redirect('/register');

        }

        $token = bin2hex(random_bytes(15));

        User::create([
            'name' => $name,
            'email' => $email,
            'token' => $token,
            'password' => md5($password)
        ]);

        $_SESSION['success'] = 'Registration successful. Please Login';
        redirect('/login');
    }

    public function checkEligibility(): void
    {
        $request = requests();

        $email = $request->email;

      if ($email == "") {
        echo "error : Enter an email";
      } else {
        $isExist = User::where('email', $email)->first();
        if ($isExist) {
          echo "<span style='color:red'> Email already exists .</span>";
          echo "<script>$('#submit').prop('disabled',true);</script>";
        } else{
          echo "<span style='color:green'> Email available for Registration .</span>";
          echo "<script>$('#submit').prop('disabled',false);</script>";
        }
      }
    }
}
