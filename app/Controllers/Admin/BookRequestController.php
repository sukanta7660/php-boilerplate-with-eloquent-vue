<?php

namespace App\Controllers\Admin;

use App\BookIssue;
use App\Controllers\Controller;

class BookRequestController extends Controller
{
  public function index()
  {
    $requests = BookIssue::where('status', 'pending')->with(['book', 'user'])->get();
    return view('admin/requests/new', ['requests' => $requests]);
  }

  public function issued()
  {
    $requests = BookIssue::where('status', 'issued')->with(['book', 'user'])->get();
    return view('admin/requests/issued', ['requests' => $requests]);
  }

  public function returned()
  {
    $requests = BookIssue::where('status', 'returned')->with(['book', 'user'])->get();
    return view('admin/requests/returned', ['requests' => $requests]);
  }

  public function cancelled()
  {
    $requests = BookIssue::where('status', 'cancelled')->with(['book', 'user'])->get();
    return view('admin/requests/cancelled', ['requests' => $requests]);
  }
}