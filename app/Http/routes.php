<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/auth/login', 'PagesController@login');
Route::get('/','PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/admin/', 'PagesController@admin');


Route::resource('/admin/portfolio/', 'PortfolioController');
Route::resource('/admin/users/', 'UsersController');
Route::resource('/admin/about/', 'AboutController');
Route::resource('/admin/home/', 'HomeController');

