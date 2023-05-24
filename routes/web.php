<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/signin', 'App\Http\Controllers\LoginController@index')->name('signin');
Route::post('/submit', 'App\Http\Controllers\LoginController@submit');
Route::get('/verify', 'App\Http\Controllers\LoginController@verify')->name('verify');
Route::post('/authenticate', 'App\Http\Controllers\AuthenticateController@auth')->name('authenticate');
Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
