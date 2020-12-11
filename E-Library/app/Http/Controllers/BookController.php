<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('user', ['books'=>$books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('book.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->Title = $request->title;
        $book->Author = $request->author;
        $book->Synopsis = $request->synopsis;
        $book->Save();
        
        return redirect('/books/admin');
    }

    public function database()
    {
     $books = Book::all();
     return view('admin.list', compact('books'));
    }

    public function show(Book $book)
    {
        return view('admin.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.edit', compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        Book::where('id', $book->id)
            ->update([
                'title' => $request->title,
                'author' => $request->author,
                'synopsis' => $request->synopsis
            ]);

        return redirect("/books/admin");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/books/admin');
    }
}
