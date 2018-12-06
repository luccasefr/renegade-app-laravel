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

Route::get('/home', function () {
    return view('home');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/games', function () {
    return view('games');
});

// Route::get('/admin/index', function () {
//     return view('admin.index');
// });


// Route::get('/app', function () {
//     return view('layouts.app');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/registers', 'RegisterController');
Route::resource('/admin', 'AdminController')->middleware('auth');


