<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\PhotoController;
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



Route::get('/public/albums',[AlbumsController::class,'index'])->name('albums-all');

Route::get('/albums/create',[AlbumsController::class,'create'])->name('albums-create');

Route::post('/albums/store',[AlbumsController::class,'store'])->name('albums-store');

Route::get('/albums/{id}',[AlbumsController::class,'show']);

// Route::get('albums/{id}/photo',[PhotoController::class,'create'])->name('photo-store');

Route::get('photo/create/{albumId}',[PhotoController::class,'create']);

Route::post('/photo/store',[PhotoController::class,'store'])->name('photo-store');

Route::get('photo/show',[PhotoController::class,'show'])->name('photo-show');

