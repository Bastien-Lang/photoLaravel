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

Route::get('/', [AlbumController::class, 'index'])->name('index');
Route::get('/albums', [AlbumController::class, 'albums'])->name('albums');
Route::get('/detailsAlbum/{id}', [AlbumController::class, 'detailsAlbum'])->name('detailsAlbum');
Route::get("/recherche", [PhotoController::class, "recherche"]) -> name("recherche");
Route::get("/ajouterAlbum", [PhotoController::class, "ajouterAlbum"]) -> name("ajouterAlbum");
Route::post("/ajouterAlbum", [AlbumController::class, "storeAlbum"])->name("storeAlbum");
Route::post('/album/{id}/ajouterPhoto', [AlbumController::class, 'ajouterPhoto'])->name('ajouterPhoto');
Route::get('/delete/{id}/ajouterPhoto', [AlbumController::class, 'delete'])->name('delete')->where(['id' => '[0-9]+']);
