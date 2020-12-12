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

Route::get('/admin', 'App\Http\Controllers\PanelController@index')->middleware('isAdmin');

Auth::routes();

Route::get('/user', 'App\Http\Controllers\BookController@index')->middleware('auth');

// Book CRUD for Admin
Route::get('/book/create', 'App\Http\Controllers\BookController@create')->middleware('isAdmin');
Route::get('/books/admin', 'App\Http\Controllers\BookController@database')->middleware('isAdmin');
Route::post('/books', 'App\Http\Controllers\BookController@store')->middleware('isAdmin');

Route::get('book/{book}/edit', 'App\Http\Controllers\BookController@edit');
Route::get('/book/{book}', 'App\Http\Controllers\BookController@show');

Route::put('/books/{book}', 'App\Http\Controllers\BookController@update');
Route::delete('/book/{book}', 'App\Http\Controllers\BookController@destroy');


//Category  
Route::get('/categories', 'App\Http\Controllers\CategoryController@index');
Route::get('/category/form', 'App\Http\Controllers\CategoryController@create');
Route::post('/category', 'App\Http\Controllers\CategoryController@store');
Route::put('/category/{category}', 'App\Http\Controllers\CategoryController@update');
Route::get('/category/{category}', 'App\Http\Controllers\CategoryController@edit');
Route::delete('/category/{category}', 'App\Http\Controllers\CategoryController@destroy');

//Panel 