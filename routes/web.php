<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\PhotoController;

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

Route::get('/', [PhotoController::class, 'index'])->name('index');
Route::get('/albums', [AlbumController::class, 'albums'])->name('albums');
Route::get('/detailsAlbum/{id}', [AlbumController::class, 'detailsAlbum'])->name('detailsAlbum');
