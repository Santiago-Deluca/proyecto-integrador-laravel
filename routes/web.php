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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'LinksController@index')->name('home');

Route::get('/registro', 'LinksController@registro');
Route::get('/index', 'HomeController@index')->name('index');
Route::get('/faq', 'HomeController@index')->name('faq');


