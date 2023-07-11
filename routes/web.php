<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/','MainController@index');

// LINEAS DE NEGOCIO
Route::get('/credito-hipotecario','MainController@hipotecario');
Route::get('/credito-empresarial','MainController@empresarial');
Route::get('/seguros','MainController@seguros');
Route::get('/credito-auto','MainController@auto');

// SUBPRODUCTOS
Route::get('/credito-hipotecario/{product}','MainController@producto');
Route::get('/credito-empresarial/{product}','MainController@producto');
Route::get('/seguros/{product}','MainController@producto');
Route::get('/credito-auto/{product}','MainController@producto');