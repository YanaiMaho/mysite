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

Route::group(['prefix' => 'user'], function() {
    Route::get('index', 'User\UserController@index');
    Route::get('create', 'User\UserController@add')->middleware('auth');
    Route::post('create', 'User\UserController@create');
    Route::get('mypost', 'User\UserController@mypost')->middleware('auth');
    Route::get('imagesearch', 'User\UserController@imagesearch');
    
    Route::get('edit', 'User\UserController@edit');
    Route::post('edit', 'User\UserController@update');
     Route::get('delete', 'User\UserController@delete');
     
      Route::get('show', 'User\UserController@show');
      Route::get('search', 'User\UserController@search');
      Route::get('animesearch', 'User\UserController@animesearch');
      Route::get('areasearch', 'User\UserController@areasearch');
      Route::get('tagsearch', 'User\UserController@tagsearch');
      Route::get('mapsearch', 'User\UserController@mapsearch');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('backindex', 'HomeController@backindex');

