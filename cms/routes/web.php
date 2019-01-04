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
Route::get('/user/list', 'UserController@list');
Route::get('/user/create', 'UserController@create');

Route::post('/user/store', 'UserController@store');
Route::get('/user/detail/{id}', 'UserController@detail');
Route::get('/user/delete/{id}', 'UserController@delete');
Route::get('/user/show/{id}', 'UserController@show');
/*
Route::post('/user/store',function(){
    return "Hello Laravel[POST]!";
});
*/
Route::get('/', function () {
    return view('admin.index');
});

Route::get('/category/list', 'CategoryController@list');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category/store', 'CategoryController@store');
Route::get('/category/delete/{id}', 'CategoryController@delete');
Route::get('/category/edit/{id}', 'CategoryController@edit');

Route::get('/blog/create', 'BlogController@create');
Route::post('/blog/store', 'BlogController@store');
Route::get('/blog/list', 'BlogController@list');
Route::get('/blog/delete/{id}', 'BlogController@delete');
Route::get('/blog/edit/{id}', 'BlogController@edit');

Route::get('/role/create', 'RoleController@create');