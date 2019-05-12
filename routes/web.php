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


Route::group(['namespace' => 'User'],function() {
    Route::get('/','HomeController@index');
    Route::get('post/{post?}','PostController@post')->name('post');
    Route::get('post/tag/{tag}','HomeController@tag')->name('tag');
    Route::get('post/category/{category}','HomeController@category')->name('category');
});

Route::group(['namespace' => 'Admin'],function() {
    Route::get('admin/home','HomeController@index')->name('admin.home');
    Route::resource('admin/post','PostController');
    Route::resource('admin/user','UserController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/role','RoleController');
    Route::resource('admin/permission','PermissionController');
    Route::resource('admin/category','CategoryController');
    Route::get('admin-login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login','Auth\LoginController@login');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
