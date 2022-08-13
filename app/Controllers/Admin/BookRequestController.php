<?php

namespace App\Controllers\Admin;

use App\Book;
use App\BookIssue;
use App\Controllers\Controller;
use App\Notification;

class BookRequestController extends Controller
{
  public function index()
  {
    $requests = BookIssue::where('status', 'pending')->with(['book', 'user'])->get();
    return view('admin/requests/new', ['requests' => $requests]);
  }

  public function issueRequest($id = null)
  {
    if ($id == null) {
      return false;
    }
    $issue_date = date('Y-m-d H:i:s');
    $return_date = date('Y-m-d H:i:s', strtotime("$issue_date + 7 day"));

    $request = BookIssue::where('id', $id)->first();
    $book = Book::where('id', $request->book_id)->first();

    $isSuccess = $request->update([
      'status' => 'issued',
      'issue_date' => $issue_date,
      'return_date' => $return_date
    ]);

    if (!$isSuccess) {
      $_SESSION['warning'] = 'Something went wrong';
      return redirect('/admin/requests/new');
    }

    $book->update([
      'availability' => $book->availability - 1
    ]);

    $_SESSION['success'] = 'Book request issued successfully';
    return redirect('/admin/requests/new');
  }

  public function cancelRequest($id = null)
  {
    if ($id == null) {
      return false;
    }
    $request = BookIssue::where('id', $id)->first();

    $isSuccess = $request->update([
      'status' => 'cancelled',
    ]);

    if (!$isSuccess) {
      $_SESSION['warning'] = 'Something went wrong';
      return redirect('/admin/requests/new');
    }

    $_SESSION['success'] = 'Book request cancelled successfully';
    return redirect('/admin/requests/new');
  }

  public function issued()
  {
    $requests = BookIssue::where('status', 'issued')->with(['book', 'user'])->get();
    return view('admin/requests/issued', ['requests' => $requests]);
  }

  public function notifyUser()
  {
    $request = user_inputs();
    $requestedBook = BookIssue::where('id', $request->id)->first();

    $notify = Notification::create([
      'book_issue_id' => $requestedBook->id,
      'user_id' => $request->user_id,
      'message' => $request->message,
      'amount' => $request->fine
    ]);

    if (!$notify) {
      $_SESSION['warning'] = 'Something went wrong';
      return redirect('/admin/requests/issued');
    }
    
      $requestedBook->update([
          'fine' => $request->fine
      ]);

    $_SESSION['success'] = 'Notification sent';
    return redirect('/admin/requests/issued');
  }
    
    public function returnBook($id = null)
    {
        if ($id == null) {
            return false;
        }
        $request = BookIssue::find($id);
        
        $request->update([
            'status' => 'returned',
            'actual_return_date' => date('Y-m-d H:i:s')
        ]);
    
        $_SESSION['success'] = 'Status changed as Returned';
        return redirect('/admin/requests/issued');
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
