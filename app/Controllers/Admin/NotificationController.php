<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Notification;

class NotificationController extends Controller
{
  public function index()
  {
    $notifications = Notification::with('user')->get();
    return view('admin/notification/notifications', ['notifications' => $notifications]);
  }

  public function delete($id = null) :bool
  {
    if($id == null){
      return false;
    }

    $notification = Notification::find($id);
    $notification->delete();

    redirect('/admin/notifications');
    return true;
  }
}