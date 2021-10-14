<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\carritoControlador;
use App\Http\Controllers\productoControlador;
use App\Http\Controllers\userControlador;
use App\Http\Controllers\indexControlador;
use App\Http\Controllers\categoriaControlador;
use App\Http\Controllers\tiendaControlador;

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

/* Route::get('/', function () {
    return view('/home');
}); */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/carrito',carritoControlador::class);


Route::resource('/productos',productoControlador::class);
Route::get('/productos/create',[\App\Http\controllers\productoControlador::class,'create']);
Route::post('/productos',[\App\Http\controllers\productoControlador::class,'store']);
Route::get('/productos/{id}',[\App\Http\controllers\productoControlador::class,'show']);
Route::get('/productos/{id}/promocion',[\App\Http\controllers\productoControlador::class,'irPromocion']);
Route::post('/productos/{id}/updatePromo',[\App\Http\controllers\productoControlador::class,'updatePromocion']);


Route::resource('/cuenta',userControlador::class);
Route::get('/cuenta/{id}/confirmEli',[\App\Http\controllers\userControlador::class,'confirmBorrarCuenta']);
Route::get('/', [App\Http\Controllers\indexControlador::class, 'index'])->name('index');


Route::resource('/categorias',categoriaControlador::class);
Route::get('/categorias/create',[\App\Http\Controllers\categoriaControlador::class,'create']);
Route::post('/categorias',[\App\Http\Controllers\categoriaControlador::class,'store']);


Route::resource('/miTienda',tiendaControlador::class);
Route::get('/miTienda/{id}/create',[\App\Http\Controllers\tiendaControlador::class,'create']);
Route::post('/miTienda',[\App\Http\Controllers\tiendaControlador::class,'store']);
