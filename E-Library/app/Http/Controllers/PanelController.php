<?php

namespace App\Http\Controllers;

use App\Models\Panel;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;

class PanelController extends Controller
{
    public function index()
    {
        $panels = Panel::all();
    	return view('admin', ['panels' => $panels]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request, $id)
    {
        $book = Book::where('id', $book->id);

        $panel = new Panel;
        $panel->users_id = $user->id;
        $panel->books_id = $book->id;
        // $panel Save();

        dd($panel);
        
    }

    public function show(Panel $panel)
    {
        //
    }


    public function edit(Panel $panel)
    {
        //
    }

    public function update(Request $request, Panel $panel)
    {
        //
    }

    public function destroy(Panel $panel)
    {
        //
    }
}
