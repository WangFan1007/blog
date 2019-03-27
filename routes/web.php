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

Route::any('/home/test/test8', 'TestController@test8')->name('test8');
Route::get('/home/test/test9', 'TestController@test9');
Route::get('/home/test/test10', 'TestController@test10');
Route::get('/home/test/test11', 'TestController@test11');

Route::get('/home/test/test12', 'TestController@test12');

Route::any('/home/test/test13', 'TestController@test13');

Route::any('/home/test/test14', 'TestController@test14');

Route::get('/home/test/test15', 'TestController@test15');

Route::get('/home/test/test16', 'TestController@test16');
Route::get('/home/test/test17', 'TestController@test17');

Route::get('/home/test/test18', 'TestController@test18');
Route::get('/home/test/test20', 'TestController@test20');

Route::get('/home/test/test21', 'TestController@test21');

