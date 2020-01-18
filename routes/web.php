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
})->name('welcome');

Route::name('blog_path')->get('/blog', 'BlogController@index');

Route::name('create_blogpost_path')->get('/blog/create', 'BlogController@create');
Route::name('store_blogpost_path')->post('/blog', 'BlogController@store');
Route::name('blogpost_path')->get('/blog/{id}', 'BlogController@show');
Route::name('edit_blogpost_path')->get('blog/{id}/edit', 'BlogController@edit');
Route::name('update_blogpost_path')->put('blog/{id}', 'BlogController@update');
Route::name('delete_blogpost_path')->delete('blog/{id}', 'BlogController@destroy');

Route::name('create_page_path')->get('/page/create', 'PageController@create');
Route::name('store_page_path')->post('/page/store', 'PageController@store');
Route::name('page_path')->get('/page/{id}', 'PageController@show');
Route::name('edit_page_path')->get('page/{id}/edit', 'PageController@edit');
Route::name('update_page_path')->put('page/{id}', 'PageController@update');
Route::name('delete_page_path')->delete('page/{id}', 'PageController@destroy');

Auth::routes(['verify' => true, 'register' => false]);

Route::get('/home', 'HomeController@index')->name('home');