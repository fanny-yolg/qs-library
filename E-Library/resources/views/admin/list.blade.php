@extends('layouts.app')

@section('title', 'Admin')
@section('href')
/admin
@endsection

@section('content')
<div class="container">
<div class = "row">
<div class = "col-8"> 
    <h1 class="mt-3">Book Database</h1>
    
    <ul class="list-group">
    @foreach($books as $book)
        <li class="list-group-item d-flex justify-content-between align-items-center">
           {{ $book->title }}
        <a href="/book/{{$book->id}}">detail</a>

        </li>
    @endforeach
    </ul>

    </div>
    </div>
</div>
@endsection