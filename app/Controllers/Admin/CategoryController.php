<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;

class CategoryController extends Controller
{
  public function index()
  {
    return view('admin/category/index');
  }
}