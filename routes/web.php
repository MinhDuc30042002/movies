<?php

use App\Http\Controllers\Admin\GenreController as AdminGenreController;
use App\Http\Controllers\Admin\MoviesController as AdminMoviesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MoviesController;
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

// Home 
Route::get('/', [HomeController::class, 'index']);

// Movie
Route::get('/movie/{slug}', [MoviesController::class, 'get_movie_by_slug']);

// Genre
Route::get('/the-loai/{slug}', [GenreController::class, 'category']);

// Search Movies
Route::get('/search/{key}', [MoviesController::class, 'searched_movies']);
Route::post('/search', [MoviesController::class, 'search_movies_by_name']);

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    // Group Genre
    Route::group(['prefix' => 'the-loai'], function () {
        Route::get('/', [AdminGenreController::class, 'index']);

        Route::get('/restore', [AdminGenreController::class, 'restore']);
        Route::get('/them', [AdminGenreController::class, 'create']);
        Route::post('/them', [AdminGenreController::class, 'store']);

        Route::get('/sua/{slug}', [AdminGenreController::class, 'edit']);
        Route::post('/sua/{slug}', [AdminGenreController::class, 'update']);

        Route::get('/xoa/{id}', [AdminGenreController::class, 'destroy']);


        Route::get('restore/{id}', [AdminGenreController::class, 'store_record']);
        Route::get('restore/destroy/{id}', [AdminGenreController::class, 'force_delete']);
    });

    // Group Movies
    Route::group(['prefix' => 'phim'], function () {
        Route::get('/', [AdminMoviesController::class, 'index']);

        Route::get('/them', [AdminMoviesController::class, 'create']);
        Route::post('/them', [AdminMoviesController::class, 'store']);

        Route::get('/xoa/{id}', [AdminMoviesController::class, 'destroy']);

        Route::get('/sua/{slug}', [AdminMoviesController::class, 'edit']);
        Route::post('/sua/{slug}', [AdminMoviesController::class, 'update']);
    });
});


require __DIR__ . '/auth.php';
