<?php

namespace App\Controllers\Admin;

use App\Book;
use App\BookIssue;
use App\Controllers\Controller;

class DashboardController extends Controller
{

  public function index()
  {
      $requests = BookIssue::all();
      $books = Book::all();
      return view('admin/dashboard/index',[
        'total' => count($requests),
        'totalBooks' => count($books),
        'pendingRequests' => $requests->where('status', 'pending')->count(),
        'cancelledRequests' => $requests->where('status', 'cancelled')->count()
      ]);
  }
}

// c3412534
// rupali
