<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
use App\Http\Controllers\categoriacontroller;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\contacttcontroller;
use App\Mail\envio_correos;
use Illuminate\Support\Facades\mail;

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

Route::get('/productos/products', [App\Http\Controllers\productcontroller::class, 'listado'])->name('listadoProductos');
Route::resource('/categoria', categoriacontroller::class);
Route::resource('/contactUs', contactcontroller::class);
Route::resource('/contactt', contacttcontroller::class);

Route::get('/contactanos', function(){
   $correo = new envio_correos;
   Mail::to('daniel.tibaduiza@unisono.com.co')->send($correo);

   return "mensaje enviada";
});

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/product', productcontroller::class);
    // Route::resource('/product/listado', productcontroller::class);
    // Route::get('/productos/products','productcontroller@listado')->name('listadoProductos');
    
    
    
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('/category', categoryController::class);
    

});  
















