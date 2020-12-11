@extends('layouts.app')

@section('title', 'Book List')
@section('href')
/user
@endsection

@section('content')
<div class="container">
<div class = "row">
<div class = "col-10"> 
    <h1 class="mt-3">Book List for you</h1>
     <table class = "table">
     <thead class="table-dark">
    <tr>
        <th scope = "col">No</th>
        <th scope = "col">Title</th>
        <th scope = "col">Author</th>
        <th scope = "col">Synopsis</th>
        <th scope = "col">Action</th>
     </tr>
     </thead>
     <tbody>
     @foreach( $books as $bk )
     <tr>
        <th scope = "row">{{ $loop->iteration}}</th>
        <td>{{ $bk->title}}</td>
        <td>{{ $bk->author}}</td>
        <td>{{ $bk->synopsis}}</td>
        <td>
            <a href="" class="badge-success">borrow this book</a>
        </td>
        @endforeach
    </tr>
    </tbody>


     </table>
    
    
    </div>
    </div>
</div>
@endsection
