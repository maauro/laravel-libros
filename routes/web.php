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

Route::get('libros', 'LibroController@index')->name('libros.index');

Route::get('libros/create', 'LibroController@create')->name('libros.create');

Route::post('libros', 'LibroController@store')->name('libros.store');

Route::get('libros/{id}', 'LibroController@show')->name('libros.show');

Route::get('libros/{id}/edit', 'LibroController@edit')->name('libros.edit');

Route::match(['put','patch'], 'libros/{id}', 'LibroController@update')->name('libros.update');

Route::delete('libros/{id}', 'LibroController@destroy')->name('libros.destroy');