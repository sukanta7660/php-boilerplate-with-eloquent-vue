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

    public function categoryWiseBooks($id = null)
    {
        if ($id == null) {
            return false;
        }

        $books = Book::where('category_id', $id)
            ->where('status', 1)
            ->with('category')
            ->get()
        ;
        $selectedCategory = Category::find($id);
        $categories = Category::where('status', 1)->with('books')->get();
        return view('user/category-wise-books', [
            'categories' => $categories, 
            'books' => $books,
            'selectedCategory' => $selectedCategory

        ]);
    }
}