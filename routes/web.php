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
Route::get('/setting', function () {
    return view('pages.setting');
});
Route::get('/allsugg', function () {
    return view('suggestions.allsugg');
});


Route::get('/people','PageController@people');
Route::get('/myprofile','PageController@myprofile');


Route::get('sugg/add','suggController@add');


Route::get('/allmyposts','PostsController@allmyposts');
Route::resource('posts', 'PostsController');

Route::get('/alluser','messageController@alluser');
Route::resource('message', 'messageController');
Route::get('/message/delete','messageController@delete');
Route::get('/message/allmess/{id}', function ($id) {
    $query_one =App\messages::where([
        ['from_user_id', '=', auth()->user()->id],
        ['to_user_id', '=', $id]])
        ->orwhere(
           [ ['from_user_id', '=', $id],
        ['to_user_id', '=', auth()->user()->id]])
        ->get();
        return response()->json($query_one);
});


Route::resource('solutionprovider', 'SproviderController');
Route::resource('Solutions', 'SolutionsController');

Route::resource('sugg', 'suggController');
Route::resource('pages', 'PageController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

