<?php

namespace App\Controllers;

use App\Book;
use App\BookIssue;
use App\Category;
use App\User;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->with('books')->get();
        $books = Book::where('status', 1)->with('category')->get();
        
        return view('users/books', [
            'categories' => $categories, 
            'books' => $books
        ]);
    }

    public function categoryWiseBooks($id = null, $slug = null)
    {
        if ($id == null && $slug == null) {
            return false;
        }

        $books = Book::where('category_id', $id)
            ->where('status', 1)
            ->with('category')
            ->get()
        ;
        $selectedCategory = Category::where('id', $id)->with('books')->first();
        $categories = Category::where('status', 1)->with('books')->get();
        return view('users/category-wise-books', [
            'categories' => $categories, 
            'books' => $books,
            'selectedCategory' => $selectedCategory

        ]);
    }

    public function checkBookPage($id = null, $slug = null)
    {
        if ($id == null && $slug == null) {
            return false;
        }

        $book = Book::where('id', $id)
            ->with('category')
            ->first()
        ;

        $books = Book::where('status', 1)->get();

        return view('users/send-request', ['book' => $book, 'books' => $books]);
    }

  public function sendRequest()
  {
    $request = user_inputs();
    $user = auth_user();

    $book = Book::where('id', $request->book_id)->first();

    $check = BookIssue::where('user_id', $user->id);

    if ($check->first()) {
      $hasTakenBook = $check->whereIn('status', ['pending', 'accepted', 'issued'])->get();

      if (count($hasTakenBook) > 0) {
        $_SESSION['warning'] = 'You already have an active book request';
        return redirect('book/'.$book->id.'/send-request/'.Str::slug($book->name));
      }
      $this->createBookIssue($request, $user);
      $_SESSION['success'] = 'Successfully request sent';
      return redirect('/');
    }else {
      $this->createBookIssue($request, $user);
      $_SESSION['success'] = 'Successfully request sent';
      return redirect('/');
    }
  }

  private function createBookIssue($request, $user)
  {
    BookIssue::create([
      'book_id' => $request->book_id,
      'user_id' => $user->id,
      'contact_no' => $request->contact_no,
      'address' => $request->address,
    ]);
  }

  public function bookDetails($id = null, $slug = null)
  {
    if ($id == null && $slug == null) {
      return false;
    }

    $book = Book::where('id', $id)
      ->with('category')
      ->first()
    ;

    return view('users/book-details', ['book' => $book]);
  }
}