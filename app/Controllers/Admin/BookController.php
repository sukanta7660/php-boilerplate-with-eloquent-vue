<?php

namespace App\Controllers\Admin;
use App\Category;
use App\Book;
use App\Controllers\Controller;
use Respect\Validation\Validator;

class BookController extends Controller
{
  public function index()
  {
    $books = Book::all();
    return view('admin/book/index', ['books' => $books]);
  }

  public function create()
  {
    $categories = Category::where('status', 1)->get();
    return view('admin/book/create', ['categories' => $categories]);
  }

  public function store()
  {
    // dd(user_inputs());
    $validate = new Validator();

    $errors = [];
    $request = user_inputs();

    if ($validate::alpha(' ')->validate($request->name) === false) {
      $errors['name'] = 'Book Name can only contains alphabets or space.';
    }

    if ($validate::alpha(' ')->validate($request->author) === false) {
      $errors['author'] = 'Author Name can only contains alphabets or space.';
    }

    if ($validate::intVal()->validate($request->quantity) === false) {
      $errors['quantity'] = 'Quantity must be an integer';
    }

    if (!empty($errors)) {
      return view('admin/book/create', ['errors' => $errors]);
    }

    $image = 'default.jpg';

    if ($request->hasFile('image')) {
      $extension = $request->image->extension();
      $image = rand(11111, 9999).'_'.time().'.'.$extension;
      $path = 'public/uploads/books/'.$image;
      move_uploaded_file($request->image, $path);
    }

    Book::create([
      'category_id' => $request->category_id,
      'name' => $request->name,
      'author' => $request->author,
      'quantity' => $request->quantity,
      'status' => $request->status,
      'image' => $image
    ]);

    redirect('/admin/book');
    return true;
  }

  public function edit($id = null)
  {
    if($id == null) {
      redirect('/admin/book');
    }

    $book = Book::find($id);
    
    return view('admin/book/edit', ['book' => $book]);
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

    $category = Book::find($id);
    $category->delete();

    redirect('/admin/book');
    return true;
  }
}