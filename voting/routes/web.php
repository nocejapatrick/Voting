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

Route::get('/','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::post('/customlogin','Auth\LoginController@custom_login')->name('custom.login');


Route::group(['prefix'=>'admin'],function(){

    Route::get('/','AdminController@index')->name('admin.index');

});


Route::group(['prefix'=>'voter'],function(){

    Route::get('/','VoterController@index')->name('voter.index');

});


