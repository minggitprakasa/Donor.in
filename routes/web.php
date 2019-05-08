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
    return view('user/blog');
});

Route::get('post',function () {
    return view('user/post');
});

Route::resource('admin/post','Admin\PostController');
Route::resource('admin/tag','Admin\TagController');
Route::resource('admin/category','Admin\CategoryController');

// Route::get('admin/home',function () {
//     return view('admin/home');
// });


Route::get('dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
