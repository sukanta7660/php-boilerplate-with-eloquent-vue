<?php

namespace App\Http\Controllers;

use App\Models\BookIssue;
use App\Models\Notification;

class OwnProfileController extends Controller
{
    public function bookList()
    {
        $requests = BookIssue::where('user_id', auth_user()['id'])->get();
        return view('users/user-side/my-book-list', ['requests' => $requests]);
    }

    public function notifications()
    {
        $notifications = Notification::where('user_id', auth_user()['id'])->with(['book_issue'])->get();
        return view('users/user-side/notification', ['notifications' => $notifications]);
    }
}
