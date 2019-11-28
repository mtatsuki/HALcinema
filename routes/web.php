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

Route::get('/', 'NewsController@show');
Route::get('/news/add', 'NewsController@add');
Route::post('/news/add_next', 'NewsController@add_next');
Route::get('/news/edit/{detailCount}', 'NewsController@edit');
Route::post('/news/edit_next', 'NewsController@edit_next');
Route::get('/news/detail/{detailCount}', 'NewsController@detail');
Route::get('/news/delete/{detailCount}', 'NewsController@delete');