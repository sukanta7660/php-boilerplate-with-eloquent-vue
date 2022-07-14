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
            return view('auth/register', ['errors' => $errors]);
        }

        $exists = User::where('email', $email)->first();

        if ($exists) {

            return 'exist';

        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => md5($password)
        ]);

        redirect('/login');
        return true;
    }
}