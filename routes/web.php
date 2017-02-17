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

Route::get('/', 'FrontController@index')->name('home');

Route::get('/question/{id}', 'FrontController@questionById')->name('question');

Route::get('/category/{id}', 'FrontController@questionsByCat')->name('category');

Route::any('/login', 'LoginController@login')->name('login');

Route::get('/logout', 'LoginController@logout')->name('logout');

Route::get('dashboard', 'DashboardController@profile')->name('dashboard')->middleware('auth');

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth'], function() {

    Route::resource('question', 'QuestionController');
    Route::get('category/{id}', 'DashboardController@questionsByCat')->name('cat');
});