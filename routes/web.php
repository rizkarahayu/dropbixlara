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

Route::group(['middleware'=>'auth'],function(){
    Route::get('/upload', function () {
        return view('file.upload');
    })->name('upload');

    Route::post('upload', 'FileController@create');

    Route::get('/list-file', 'FileController@get_list')->name('list-file');

    Route::get('/detail-file/{id}', 'FileController@get_file')->name('detail-file');

    Route::post('update', 'FileController@update')->name('update');

    // Route::get('/detail', function () {
    //     return view('file.detail-file');
    // })->name('detail-file');
    
    
});


Auth::routes();
Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});

//Route::get('/home', 'HomeController@index')->name('home');
