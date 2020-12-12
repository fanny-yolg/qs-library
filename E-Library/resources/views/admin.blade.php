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
    <a href="/books/admin" class="btn btn-primary mx-4">Book Databse</a>
    <a href="/categories" class="btn btn-primary mx-4">Book Category Databse</a>

    <h1 class="mt-3">Permit the users to borrow the books</h1>
    <table class = "table">
        <thead class="table-dark">
            <tr>
                <th scope = "col">No</th>
                <th scope = "col">User</th>
                <th scope = "col">Book's Title</th>
                <th scope = "col">Action</th>
            </tr>
        </thead>

    </table>
    </div>
</div>
</div>
@endsection