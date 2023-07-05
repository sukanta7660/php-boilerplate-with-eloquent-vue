<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\BookIssue;

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
