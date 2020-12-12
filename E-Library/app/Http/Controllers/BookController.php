<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('user', ['books'=>$books]);
    }

    // public function getBookUser()
    // {
    //     $books = $this->book->getAll();
    //     dd($books);
    //     return view('admin', ['books'=>$books]);
    // }

    // public function storeBook(Request $request){
    //     $panels 
    // }

    public function create()
    {
        return view('book.create');
    }

    public function store(Request $request)
    {
        $book = new Book;
        $book->Title = $request->title;
        $book->Author = $request->author;
        $book->Synopsis = $request->synopsis;
        $book->categories_id = $request->categories_id; 
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
                'synopsis' => $request->synopsis,
                'categories_id' => $request->categories_id
            ]);

        return redirect("/books/admin");
    }

    public function destroy(Book $book)
    {
        Book::destroy($book->id);
        return redirect('/books/admin');
    }
}
