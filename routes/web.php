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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','Test@index');
Route::get('test/test', 'Test@test');
Route::get('test/create', 'Test@createAc');
Route::post('test/create', 'Test@save');
Route::post('/upload/index', 'UploadController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->middleware('auth');
//Route::get('/home', 'HomeController@index');
