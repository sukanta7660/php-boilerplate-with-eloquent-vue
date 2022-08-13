<?php

namespace App\Controllers\Admin;

use App\Contact;
use App\Controllers\Controller;

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
