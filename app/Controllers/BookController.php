<?php

namespace App\Controllers;

use App\Book;
use App\BookIssue;
use App\Category;
use App\User;

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

    $isExist = BookIssue::where('user_id', $user->id)
      ->first()
    ;

    if ($isExist) {
      return "ALREADY EXIST";
    }else {
      BookIssue::create([
        'book_id' => $request->book_id,
        'user_id' => $user->id,
        'contact_no' => $request->contact_no,
        'address' => $request->address,
      ]);

      echo "<script>alert('Successfully request sent.')</script>";
      return redirect('/');
    }
  }
}