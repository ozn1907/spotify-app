<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;
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

Route::get('/', [ArtistController::class, 'show'])->name('home');
Route::get('/delete/{uuid}', [ArtistController::class, 'delete'])->name('delete');
Route::get('/view/{uuid}', [ArtistController::class, 'view'])->name('view');
Route::post('/edit/{uuid}', [ArtistController::class, 'edit'])->name('edit');

Route::get('/artists/create', [ArtistController::class, 'create'])->name('artists.create');
Route::post('/artists', [ArtistController::class, 'store'])->name('artists.store');

Route::get('/delete-all', [ArtistController::class, 'deleteAll'])->name('delete.all');
