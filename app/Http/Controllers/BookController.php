<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookIssue;
use App\Models\BookReview;
use App\Models\Category;
use Illuminate\Http\Request;
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

        $books = Book::where('status', 1)->take(5)->get();

        return view('users/send-request', ['book' => $book, 'books' => $books]);
    }

  public function sendRequest()
  {
    $request = requests();
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

  public function giveReview(){
    $request = requests();
    $book = Book::find($request->id);

    $review = BookReview::create([
      'book_id' => $request->id,
      'user_id' => auth_user()['id'],
      'points' => $request->rate,
      'review' => $request->review
    ]);
    if (!$review) {
      $_SESSION['warning'] = 'Something went wrong';
      return redirect('book/'.$book->id.'/book-details/'.Str::slug($book->name));
    }
    $_SESSION['success'] = 'Successfully submitted your review';
    return redirect('book/'.$book->id.'/book-details/'.Str::slug($book->name));
  }
}
