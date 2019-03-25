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


Route::get('/home/test/test1', 'TestController@test1');
Route::get('/home/test/test2', 'TestController@test2');

Route::group(['prefix' => 'home/test'], function () {
    Route::get('add', 'TestController@add');
    Route::get('del', 'TestController@del');
    Route::get('update', 'TestController@update');
    Route::get('select', 'TestController@select');
    Route::get('test3', 'TestController@test3');
});

Route::get('/home/test/test4', 'TestController@test4');

Route::get('/home/test/test6', 'TestController@test6');
Route::post('/home/test/test7', 'TestController@test7')->name('test7');