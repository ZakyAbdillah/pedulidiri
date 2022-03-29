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


Route::group(['middleware'=>'auth'],function(){
    Route::get('/', function () {
        return view('auth.login');
    });

    //user
    Route::get('/user','UserController@index');
    Route::post('/user/create','UserController@create');
    Route::get('/user/{id}/delete','UserController@delete');
    Route::get('/user/{id}/edit','UserController@edit');
    Route::post('/user/{id}/update','UserController@update');
    Route::get('/print', 'UserController@cetak_pdf');
    
    //perjalanan
    Route::get('/perjalanan','PerjalananController@index');
    Route::post('/perjalanan/create','PerjalananController@create');
    Route::get('/perjalanan/{id}/delete','PerjalananController@delete');
    Route::get('/datauser','UserController@dataUser');

    //dashboard
    Route::get('/home','AuthController@home');
});
    //login
    Route::get('/login','AuthController@login')->name('login');
    Route::post('/postlogin','AuthController@postlogin');
    Route::get('/logout','AuthController@logout');
    Route::get('/regist','AuthController@regist');
    Route::post('/postregister','AuthController@postregister');

