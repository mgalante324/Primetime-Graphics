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

/* Pages */
Route::get('/', 'PagesController@index');
Route::get('/portfolio', 'PagesController@portfolio');
Route::get('/portfolio/{category}','PagesController@category');
Route::get('/portfolio/{category}/{id}','ProjectsController@show');
Route::get('/contact', 'PagesController@contact');

/* CRUD */
Route::resource('projects','ProjectsController');
Route::resource('categories','CategoriesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
