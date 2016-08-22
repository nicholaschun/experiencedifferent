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


Route::get('/','PagesController@index');
Route::get('/index','PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/graphic', 'PagesController@graphic');
Route::get('/animation', 'PagesController@animation');



Route::get('/admin/', 'AdminController@index');
Route::resource('/admin/portfolio/', 'PortfolioController');
Route::resource('/admin/users/', 'UsersController');
Route::resource('/admin/about/', 'AboutController');
Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('admin/portfolio/uploadPortfolio', 'DropzoneController@uploadFiles');

Route::get('/admin/about/deleteClient/{id}', 'AboutController@deleteClient');
Route::get('/admin/about/deleteTelephone/{id}', 'AboutController@deleteTelephone');
Route::get('/admin/portfolio/deletePortfolio/{id}', 'PortfolioController@deletePortfolio');
Route::get('/admin/home/deleteSlide/{id}', 'HomeController@deleteSlide');
Route::get('/admin/about/deleteEmail/{id}', 'AboutController@deleteEmail');
Route::get('/admin/users/deleteUser/{id}', 'UsersController@deleteUser');
Route::resource('/admin/home/', 'HomeController');
Route::post('/admin/users/addUser','UsersController@addUser');


//Authentication routes

Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::get('/auth/login2', 'Auth\AuthController@getLogin');
Route::post('/auth/login','Auth\AuthController@postLogin');
Route::get('/auth/logout','Auth\AuthController@getLogout');


//Registration routes

Route::get('/auth/register','Auth\AuthController@getRegister');
Route::post('/auth/register','Auth\AuthController@postRegister');




