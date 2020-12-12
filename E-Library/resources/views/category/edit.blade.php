@extends('layouts.app')

@section('title', 'Form Edit Book Category')
@section('href')
/admin 
@endsection
@section('content')
<div class="container">
<div class = "row">
<div class = "col-10"> 
    <h1 class="mt-3">Please Fill the form to edit the category</h1>
    <form method="POST" action="/category/{{$category->id}}">
    @method("put")
    @csrf

  <div class="form-group">
    <label for="category_name">Category Name</label>
    <input type="text" class="form-control" id="category_name" value='{{ $category->category_name}}' name="category_name">
  </div>
  
  <button type="submit" class="btn btn-primary my-3">Edit Category..?</button>
</form>

    </div>
    </div>
</div>
@endsection