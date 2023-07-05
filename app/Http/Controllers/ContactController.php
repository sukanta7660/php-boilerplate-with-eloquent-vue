<?php

namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function store()
    {
        $request = user_inputs();

        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'messages' => $request->messages,
        ]);
        $_SESSION['success'] = 'Message successfully sent';
        return redirect('/');
    }
}
