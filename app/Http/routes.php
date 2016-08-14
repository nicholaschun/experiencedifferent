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
Route::get('/index','PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/graphic', 'PagesController@graphic');
Route::get('/animation', 'PagesController@animation');
Route::get('/admin/', 'PagesController@admin');




Route::resource('/admin/portfolio/', 'PortfolioController');
Route::resource('/admin/users/', 'UsersController');
Route::resource('/admin/about/', 'AboutController');
Route::get('/admin/about/deleteClient/{id}', 'AboutController@deleteClient');
Route::get('/admin/about/deleteTelephone/{id}', 'AboutController@deleteTelephone');
Route::get('/admin/portfolio/deletePortfolio/{id}', 'PortfolioController@deletePortfolio');
Route::get('/admin/about/deleteEmail/{id}', 'AboutController@deleteEmail');
Route::resource('/admin/home/', 'HomeController');
Route::post('/admin/users/addUser','UsersController@addUser');


