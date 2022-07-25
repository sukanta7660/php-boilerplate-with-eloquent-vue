<?php

namespace App\Controllers\Admin;
use App\Category;
use App\Controllers\Controller;

class CategoryController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('admin/category/index', ['categories' => $categories]);
  }

  public function delete(Category $category)
  {
    $category->delete();

    redirect('/admin/category');
    return true;
  }
}