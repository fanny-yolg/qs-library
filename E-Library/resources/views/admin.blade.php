@extends('layouts.app')

@section('title', 'Manage the Library')

@section('href')
/admin
@endsection

@section('content')
<div class="container">
<div class = "row">
<div class = "col-10"> 
    <h1 class="mt-3">Please Add, Edit or Delete the Book List as Needed</h1>
     
    <a href="/book/create" class="btn btn-primary my-3" >Add Book List</a>
    <a href="/books/admin" class="btn btn-primary mx-4">Edit Book List</a>
    <a href="/books/admin" class="btn btn-primary mx-6">Delete Book List</a>
    </div>
    </div>
</div>
@endsection