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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/demo', function () {
    return view('demo');
});

Route::get('/upload', function () {
    return view('file.upload');
})->name('upload');

Route::get('/list-file', function () {
    return view('file.list-file');
})->name('list-file');

Route::get('/detail', function () {
    return view('file.detail-file');
})->name('detail-file');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
