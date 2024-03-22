<?php

use App\Http\Controllers\BrandsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Posts;
use App\Http\Controllers\CarController;
use App\Http\Controllers\Auth\Sessions;

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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->group(function () {
    Route::controller(Sessions::class)->group(function () {
        Route::get('/login', 'create')->name('auth.sessions.create');
        Route::post('/login', 'store')->name('auth.sessions.store');
        // Route::get('/logout', 'destroy')->name('auth.session.destroy');

    });
});

Route::get('/posts', [Posts::class, 'index']);
Route::get('/posts/create', [Posts::class, 'create']);
Route::post('/posts', [Posts::class, 'store']);
Route::get('/posts/{id}', [Posts::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [Posts::class, 'edit']);
Route::put('/posts/{id}', [Posts::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [Posts::class, 'destroy'])->name('posts.destroy');

Route::get('cars/trashed', [CarController::class, 'trashed'])->name('cars.trashed');
Route::put('cars/{car}/restore', [CarController::class, 'restore'])->name('cars.restore');
Route::resource('cars', CarController::class);
Route::resource('brands', BrandsController::class);



