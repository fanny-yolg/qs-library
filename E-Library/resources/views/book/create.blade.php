@extends('layouts.app')

@section('title', 'Create Book Form')

@section('href')
/admin
@endsection

@section('content')
<div class="container">
<div class = "row">
<div class = "col-10"> 
    <h1 class="mt-3">Please Fill the form to add a book</h1>
    <form method="POST" action="/books">
    @CSRF

  <div class="form-group">
    <label for="Title">Title</label>
    <input type="text" class="form-control" id="title" placeholder="Please insert the title..." name="title">
  </div>
  <div class="form-group">
    <label for="Author">Author</label>
    <input type="text" class="form-control" id="author" placeholder="Please insert the author..." name="author">
  </div>
  <div class="form-group">
    <label for="synopsis">Synopsis</label>
    <input type="text" class="form-control" id="synopsis" placeholder="Please insert the synopsis..." name="synopsis">
  </div>
  <div class="form-group">
    <label for="categories_id">Category</label>
    <input type="text" class="form-control" id="categories_id" placeholder="Please insert the category..." name="categories_id">
  </div>

  <button type="submit" class="btn btn-primary my-3">Add Book..?</button>
</form>

    </div>
    </div>
</div>
@endsection