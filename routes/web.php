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

Route::get('/people','PageController@people');
Route::get('/myprofile','PageController@myprofile');
Route::get('/people/{{$id}}','PageController@show');


Route::get('sugg/add','suggController@add');



Route::get('/allmyposts','PostsController@allmyposts');
Route::resource('posts', 'PostsController');



Route::resource('solutionprovider', 'SproviderController');
Route::resource('Solutions', 'SolutionsController');
Route::resource('sugg', 'suggController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

