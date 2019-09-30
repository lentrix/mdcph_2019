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

Route::get('/', 'SiteController@index');

Route::get('/admin', 'AdminController@loginForm')->name('login');

Route::post('/login', 'AdminController@login');

Route::group(['middleware'=>['auth']], function(){
    Route::get('/admin/home', 'AdminController@home')->name('home');
    Route::get('/logout', 'AdminController@logout');
    Route::get('/admin/posts', 'PostController@index');
});
