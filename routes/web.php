<?php

use Illuminate\Support\Facades\Route;
use Controllers\ClientesController;

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
})->name('home');

Route::get('clientes', 'App\Http\Controllers\ClientesController@index')->name('clientes.index')->middleware('auth');
// Route::get('clientes', [ClientesController::class, 'index'])->name('clientes.index');


Route::get('login', 'App\Http\Controllers\LoginController@loginForm')->name('login');

Route::post('login', 'App\Http\Controllers\LoginController@login');

Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::get('acc', 'App\Http\Controllers\AccController@index')->name('acc.index');

Route::post('acc', 'App\Http\Controllers\AccController@store')->name('acc.store');

Route::get('admin', 'App\Http\Controllers\AdminController@hola')->name('admin')->middleware('auth');


