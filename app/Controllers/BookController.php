<?php

namespace App\Controllers;

use App\Book;
use App\Category;

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
}