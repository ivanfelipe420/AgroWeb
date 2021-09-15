<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carritoControlador;
use App\Http\Controllers\productoControlador;
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
    return view('/home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/carrito',carritoControlador::class);


Route::resource('/productos',productoControlador::class);
Route::get('/productos/create',[\App\Http\controllers\productoControlador::class,'create']);
Route::post('/productos',[\App\Http\controllers\productoControlador::class,'store']);

