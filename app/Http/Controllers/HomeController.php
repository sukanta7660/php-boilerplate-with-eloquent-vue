<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->with('books')->get();
        $books = Book::where('status', 1)->get();

        return view('users/index', [
            'categories' => $categories,
            'books' => $books
        ]);
    }

    public function about()
    {
        return view('users/about');
    }

    public function contact()
    {
        return view('users/contact');
    }
}
