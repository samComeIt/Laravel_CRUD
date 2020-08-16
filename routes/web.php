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
    return view('cars.create');
});

Route::resource('cars', 'CarController');

Route::get('/phonebook/create', ['as' => 'PhoneBook::create', 'uses' => 'PhoneBookController@create']);
Route::post('/phonebook/store', ['as' => 'PhoneBook::store', 'uses' => 'PhoneBookController@store']);

Route::get('/phonebook',['as' => 'PhoneBook::index', 'uses' => 'PhoneBookController@index']);

Route::get('/{exampleId}/phonebook',['as' => 'PhoneBook::select', 'uses' => 'PhoneBookController@select']);

Route::post('/phonebook/update',['as' => 'PhoneBook::update', 'uses' => 'PhoneBookController@update']);
Route::post('/phonebook/delete',['as' => 'PhoneBook::delete', 'uses' => 'PhoneBookController@delete']);


Route::get('/book',['as' => 'Book::index', 'uses' => 'BookController@index']);
Route::get('/book/create',['as' => 'Book::create', 'uses' => 'BookController@create']);
Route::post('/book/store',['as' => 'Book::store', 'uses' => 'BookController@store']);
Route::post('/book/delete', ['as' => 'Book::destroy', 'uses' => 'BookController@destroy']);

Route::get('/book/{bookId}/select', ['as' => 'Book::select', 'uses' => 'BookController@select']);
Route::post('/book/update',['as' => 'Book::update', 'uses' => 'BookController@update']);