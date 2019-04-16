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





Route::get('directions', function () {
    return view('directions');
});

Route::get('photos', function () {
    return view('photos');
});

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/form/create',function(){
	return view('form.create');
});
  
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

/* Form Routes */

Route::get('/create', 'FormController@create')->name('create');
Route::POST('/form', 'FormController@store')->name('form');

Route::get('record','RecordController@index');

Route::get('create','RecordController@create');
Route::post('store','RecordController@store');
Route::get('show/{id}','RecordController@show');
Route::get('edit/{id}','RecordController@edit');
Route::post('update/{id}','RecordController@update');
Route::delete('destroy/{id}','RecordController@destroy');

Route::get('volunteers', function () {
    return view('volunteers');
});

Route::name('blogs_path')->get('/blogs','BlogsController@index');
Route::name('create_blog_path')->get('/blogs/create','BlogsController@create');
Route::name('store_blog_path')->post('/blogs','BlogsController@store');
Route::name('blog_path')->get('/blogs/{id}','BlogsController@show');
Route::name('edit_blog_path')->get('/blogs/{id}/edit','BlogsController@edit');
Route::name('update_blog_path')->put('/blogs/{id}','BlogsController@update');
Route::name('delete_blog_path')->delete('/blogs/{id}','BlogsController@destroy');

