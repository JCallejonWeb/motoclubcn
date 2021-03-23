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

Route::get('/sobre-nosotros', function () {
    return view('welcome');
})->name('sobre-nosotros');

Auth::routes();

Route::get('/home', [App\Http\Controllers\ImageController::class, 'images'])->name('home');
Route::get('images',[App\Http\Controllers\ImageController::class,'images'])->name('images');
Route::post('images/save',[App\Http\Controllers\ImageController::class,'save'])->name('images.save');
Route::get('image/file/{filename}',[App\Http\Controllers\ImageController::class, 'getImage'])->name('image.file');
Route::get('image/delete/{id}',[App\Http\Controllers\ImageController::class,'delete'])->name('image.delete');
Route::get('ruta',[App\Http\Controllers\RutaController::class,'rutas'])->name('rutas');
Route::post('rutas/save',[App\Http\Controllers\RutaController::class,'save'])->name('rutas.save');
Route::get('rutas/file/{filename}',[App\Http\Controllers\RutaController::class, 'getImage'])->name('ruta.file');
Route::get('rutas/delete/{id}',[App\Http\Controllers\RutaController::class, 'delete'])->name('ruta.delete');
Route::get('rutas/update',[App\Http\Controllers\RutaController::class,'update'])->name('ruta.update');
Route::get('usuarios',[App\Http\Controllers\UserController::class,'usuarios'])->name('usuarios');
Route::post('usuarios/save',[App\Http\Controllers\UserController::class,'save'])->name('usuarios.save');
Route::get('usuarios/delete/{id}',[App\Http\Controllers\UserController::class,'delete'])->name('usuarios.delete');
Route::get('rutas-publicas',[App\Http\Controllers\RutaController::class,'rutasPublicas'])->name('rutas-publicas');
Route::get('/galeria',[App\Http\Controllers\ImageController::class,'publicImages'])->name('galeria');

Route::post('images/upload',[App\Http\Controllers\ImageController::class,'multipleUpload'])->name('images.upload');
