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

Route::get('/usuarios', 'userController@index')
->name('users');

Route::get('/usuarios/{user}', 'userController@show')
->where('id', '[0-9]+')
->name('users.show');

Route::get('/usuarios/nuevo', 'userController@create')
->name('users.create');

Route::post('/usuarios/crear', 'userController@store')
->name('users.store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/profile', 'HomeController@profile')->name('profile');