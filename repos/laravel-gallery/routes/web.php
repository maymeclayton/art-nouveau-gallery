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

Route::get('/', function () {
    $exhibits = \App\Exhibit::get();
    return view('welcome', compact('exhibits'));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/exhibits', 'ExhibitController');
