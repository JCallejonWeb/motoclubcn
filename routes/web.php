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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('images',[App\Http\Controllers\ImageController::class,'images'])->name('images');
Route::post('images/save',[App\Http\Controllers\ImageController::class,'save'])->name('images.save');
Route::get('image/file/{filename}',[App\Http\Controllers\ImageController::class, 'getImage'])->name('image.file');
