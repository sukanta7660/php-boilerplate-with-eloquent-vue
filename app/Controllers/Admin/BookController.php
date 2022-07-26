<?php

namespace App\Controllers\Admin;
use App\Category;
use App\Controllers\Controller;
use Respect\Validation\Validator;

class BookController extends Controller
{
  public function index()
  {
    $categories = Category::all();
    return view('admin/book/index', ['categories' => $categories]);
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

    if ($validate::alpha(' ')->validate($request->name) === false) {
      $errors['name'] = 'Name can only contains alphabets or space.';
    }

    if (!empty($errors)) {
      return view('admin/book/create', ['errors' => $errors]);
    }

    Category::create([
      'name' => $request->name,
      'status' => $request->status
    ]);

    redirect('/admin/book');
    return true;
  }

  public function edit($id = null)
  {
    if($id == null) {
      redirect('/admin/book');
    }

    $category = Category::find($id);
    
    return view('admin/book/edit', ['category' => $category]);
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

    redirect('/admin/book');
    return true;
  }

  public function delete($id = null)
  {

    if($id == null){
      redirect('/admin/book');
    }

    $category = Category::find($id);
    $category->delete();

    redirect('/admin/book');
    return true;
  }
}