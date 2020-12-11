<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin');
})->middleware('isAdmin');

// Route::get('/user', function () {
//     return view('user');
// })->middleware('auth');

Auth::routes();

Route::get('/user', 'App\Http\Controllers\BookController@index')->middleware('auth');


// Book CRUD for Admin
Route::get('/book/create', 'App\Http\Controllers\BookController@create');
Route::get('/books/admin', 'App\Http\Controllers\BookController@database')->middleware('isAdmin');
Route::post('/books', 'App\Http\Controllers\BookController@store');

Route::get('book/{book}/edit', 'App\Http\Controllers\BookController@edit');
Route::get('/book/{book}', 'App\Http\Controllers\BookController@show');

Route::put('/books/{book}', 'App\Http\Controllers\BookController@update');
Route::delete('/book/{book}', 'App\Http\Controllers\BookController@destroy');


//User 