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

Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');


Route::group(['namespace' => 'Admin' ,'middleware' => ['admin','verified']], function() {

    Route::get('/admin','PageController@index')->name('admin');
    Route::resource('admin/post','PostController');
    Route::resource('admin/tag','TagController');
    Route::resource('admin/category','CategoryController');

});


Route::group(['middleware' => ['user','verified']], function() {

    Route::get('/home', 'HomeController@index')->name('home');

});

Route::group(['namespace' => 'User' ,'middleware' => ['user','verified']], function() {

    Route::get('/user','PageController@index')->name('user');

});

Route::group(['namespace' => 'Page'],function(){

    Route::get('/','PageController@index')->name('mainpage');
    Route::get('post/{post}','PageController@post')->name('post');
    Route::get('post/tag/{tag}','PageController@tag')->name('tag');
    Route::get('post/category/{category}','PageController@category')->name('category');
    Route::get('/contact','PageController@contact')->name('contact');
    Route::get('/portfolio','PageController@portfolio')->name('portfolio');
    Route::get('/portfitem','PageController@portfitem')->name('portfitem');
    Route::get('/cancelled','PageController@cancel');
    Route::get('/completed','PageController@complete');
    Route::get('/new','PageController@new')->name('new');
});

//authenticate apache
//backendeveloper
//PHP

//,'middleware' => ['page-cache']