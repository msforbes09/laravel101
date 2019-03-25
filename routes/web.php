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

// Route::get('/', 'TicketsController@index');
// Route::get('/create', 'TicketsController@create');
// Route::post('/create', 'TicketsController@store');
// Route::get('/tickets', 'TicketsController@index');
// Route::get('/ticket/{slug?}', 'TicketsController@show');
// Route::get('/ticket/{slug?}/edit','TicketsController@edit');
// Route::post('/ticket/{slug?}/edit','TicketsController@update');
// Route::post('/ticket/{slug?}/delete','TicketsController@destroy');
// Route::post('/comment', 'CommentsController@newComment');
// Route::get('/home', 'HomeController@index')->name('home');
// Auth::routes();
// Route::resource('/passwords', 'PasswordsController');

Route::get('/vue101', function () {
    return view('vue101.index');
});
Route::get('/calendar', 'CalendarController@index');
