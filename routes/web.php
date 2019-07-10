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
    return view('index');
});

Route::get('finish', 'QanswerController@finish')->name('qanswer.finish');
Route::get('qanswer/qstatistics','QanswerController@qstatistics')->name('qanswer.qstatistics')->middleware('auth');;


Route::resource('qanswer','QanswerController');

Route::auth();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
