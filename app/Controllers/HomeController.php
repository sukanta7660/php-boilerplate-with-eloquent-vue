<?php

namespace App\Controllers;
use App\Category;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('status', 1)->with('books')->get();
        return view('users/index', ['categories' => $categories]);
    }
}