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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Articles

Route::get('/articles/browse', 'ArticleController@browse')->name('articles.browse')->middleware('auth');
Route::resource('articles', 'ArticleController')->middleware('auth');

//Profiles
Route::resource('profiles', 'ProfileController', ['except' => ['index']])->middleware('auth');
Route::get('/{nickname}', 'ProfileController@index')->name('profiles.index')->middleware('auth');

//Likes
Route::resource('likes', 'LikeController')->middleware('auth');
