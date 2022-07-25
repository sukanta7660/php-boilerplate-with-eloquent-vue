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

  public function create()
  {
    return view('admin/category/create');
  }

  public function delete($id = null)
  {

    if($id == null){
      redirect('/admin/category');
    }

    $category = Category::find($id);
    $category->delete();

    redirect('/admin/category');
    return true;
  }
}