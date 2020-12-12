@extends('layouts.app')

@section('title', 'Admin Editor')

@section('href')
/admin 
@endsection

@section('content')
<div class="container">
<div class = "row">
<div class = "col-8"> 
    <h1 class="mt-3">Category Databases</h1>
    
    <ul class="list-group">
    @foreach($categories as $category)
        <li class="list-group-item d-flex justify-content-between align-items-center">
           {{ $category->category_name }}
           
        <a href="/category/form">add category</a>
        <a href="/category/{{$category->id}}">edit category</a>
        <form action="/category/{{ $category->id }}" method="POST" class='display d-inline'>
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>        </li>
    @endforeach
    </ul>

    </div>
    </div>
</div>
@endsection