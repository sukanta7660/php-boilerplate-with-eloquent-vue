<?php

namespace App\Controllers\Admin;
use App\Category;
use App\Controllers\Controller;
use Respect\Validation\Validator;

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

  public function store()
  {
    $validate = new Validator();

    $errors = [];
    $request = user_inputs();

    Category::create([
      'name' => $request->name,
      'status' => $request->status
    ]);

    redirect('/admin/category');
    return true;
  }

  public function edit($id = null)
  {
    if($id == null) {
      redirect('/admin/category');
    }

    $category = Category::find($id);
    
    return view('admin/category/edit', ['category' => $category]);
  }

  public function update()
  {
    $validate = new Validator();

    $errors = [];
    $request = user_inputs();

    Category::where('id', $request->id)->update([
      'name' => $request->name,
      'status' => $request->status
    ]);

    redirect('/admin/category');
    return true;
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