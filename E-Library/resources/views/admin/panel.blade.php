@extends('layouts.app')

@section('title', 'Admin Panel')
@section('href')
/admin
@endsection

@section('content')
<div class="container">
<div class = "row">
<div class = "col-8"> 
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
     <tbody>

     @foreach( $panels as $panel )
     <tr>
        <th scope = "row">{{ $loop->iteration}}</th>
        <td>{{ $user->name}}</td>
        @foreach( $user->$book as $b)
        <td>{{ $b->title}}</td>
        <td>
        <form action="/permit/{{ $panel->id }}" method="POST" class='display d-inline'>
        <button type="submit" class="btn btn-primary">Allow</button>
        </form>
        </td>
        @endforeach
    </tr>
    </tbody>


     </table>
    <ul class="list-group">
    @foreach($books as $book)
        <li class="list-group-item d-flex justify-content-between align-items-center">
           {{ $book->title }}
        <a href="/book/{{$book->id}}">Allow</a>

        </li>
    @endforeach
    </ul>

    </div>
    </div>
</div>
@endsection