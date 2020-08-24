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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/admin/login', 'Auth\adminloginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\adminloginController@login')->name('admin.login.submit');
Route::get('/admin', 'adminController@index')->name('admin.dashboard');
