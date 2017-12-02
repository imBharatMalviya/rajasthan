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

Route::get('/', 'HomeController@welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/category', 'CategoryController@index');
Route::get('/category/add', 'CategoryController@add');
Route::get('/category/edit/{id}', 'CategoryController@edit');
Route::post('/category/save', 'CategoryController@save');
Route::post('/category/update/{id}', 'CategoryController@update');
Route::get('/category/delete/{id}', 'CategoryController@delete');

Route::get('/place', 'PlaceController@index');
Route::get('/place/add', 'PlaceController@add');
Route::get('/place/edit/{id}', 'PlaceController@edit');
Route::post('/place/save', 'PlaceController@save');
Route::post('/place/update/{id}', 'PlaceController@update');
Route::get('/place/delete/{id}', 'PlaceController@delete');


Route::get('/photo/{id}', 'PhotoController@index');
Route::get('/photo/add/{id}', 'PhotoController@add');
Route::get('/photo/edit/{id}', 'PhotoController@edit');
Route::post('/photo/save', 'PhotoController@save');
Route::post('/photo/update/{id}', 'PhotoController@update');
Route::get('/photo/delete/{id}', 'PhotoController@delete');

Route::get('/place_view/{id}','HomeController@place');