<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','VideoController@index');

Auth::routes();

//route video

Route::get('/home','VideoController@index')->name('video.index');
Route::get('/home/CreateVideo','VideoController@create')->name('video.create');
Route::Post('/home', 'VideoController@store')->name('video.store');
Route::get('/home/{video}','videoController@show')->name('video.show');
Route::post('/home/like','videoController@like')->name('video.like');
Route::post('/home/dislike','videoController@dislike')->name('video.dislike');
