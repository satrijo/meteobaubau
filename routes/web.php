<?php

use App\Http\Controllers\Admin\{DashboardController, CategoryController, PostController};
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', function () {
    return redirect('/');
});

Route::prefix('admin')
    ->middleware('admin')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::prefix('/post')
            ->group(
                function () {
                    Route::get('/', [PostController::class, 'index'])->name('post');
                    Route::get('/create', [PostController::class, 'create'])->name('post.create');
                    Route::post('/store', [PostController::class, 'store'])->name('post.store');
                    Route::get('/{slug}/edit', [PostController::class, 'edit'])->name('post.edit');
                    Route::put('/{slug}/update', [PostController::class, 'update'])->name('post.update');
                    Route::delete('/{slug}/delete', [PostController::class, 'destroy'])->name('post.destroy');
                }
            );
        Route::prefix('/category')
            ->group(
                function () {
                    Route::get('/', [CategoryController::class, 'index'])->name('category');
                    Route::get('/create', [CategoryController::class, 'create'])->name('category.create');
                    Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
                    Route::get('/{slug}/edit', [CategoryController::class, 'edit'])->name('category.edit');
                    Route::put('/{slug}/update', [CategoryController::class, 'update'])->name('category.update');
                    Route::delete('/{slug}/delete', [CategoryController::class, 'destroy'])->name('category.destroy');
                }
            );
    });
Auth::routes();
