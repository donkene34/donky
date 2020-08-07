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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//route video

Route::get('/home','VideoController@index')->name('video.index');
Route::get('/home/CreateVideo','VideoController@create')->name('video.create');
Route::Post('/home', 'VideoController@store')->name('video.store');

Route::get('/AA', function () {
    return "bonjour";
});
