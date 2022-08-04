<?php

namespace App\Controllers;

use App\Book;
use App\Category;

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
}