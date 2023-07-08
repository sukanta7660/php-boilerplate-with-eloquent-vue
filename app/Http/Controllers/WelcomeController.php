<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController extends Controller
{
    public function index() {
        view('app/app');
    }

    public function testApi() {
        $data = [
            'users' => User::all(),
            'auth' => auth_user(),
        ];
        return $this->sendResponse($data, 'data Fetched', true, 200);
    }
}
