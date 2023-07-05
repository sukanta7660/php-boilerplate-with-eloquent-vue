<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::all();
        return view('admin/contact/index', ['messages' => $messages]);
    }

    public function delete($id = null)
    {
        if ($id == null) {
            return false;
        }

        $message = Contact::find($id);
        $message->delete();

        $_SESSION['success'] = 'Message deleted';
        return redirect('/admin/contact');
    }
}
