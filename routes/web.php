<?php

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

// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $title = 'About';
//     return view('about', ['title' => $title]);
// });

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');
Route::get('/mahasiswa/{mahasiswa}', 'MahasiswaController@show');
Route::get('/mahasiswa/create', 'MahasiswaController@create');
Route::post('/mahasiswa', 'MahasiswaController@store');
Route::get('/mahasiswa/edit', 'MahasiswaController@edit');
Route::put('/mahasiswa', 'MahasiswaController@update');
Route::delete('/mahasiswa/{mahasiswa}', 'MahasiswaController@destroy');

Route::get('/books', 'BooksController@index');
Route::get('/books/create', 'BooksController@create');
Route::get('/books/{book}', 'BooksController@show');
Route::post('/books', 'BooksController@store');
