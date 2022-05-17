<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PanelController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/panel', [PanelController::class, 'index'])->name('panel');
Route::get('/shop', [IndexController::class, 'shop'])->name('shop');

// * Blog Route
Route::get('/blogs', [BlogController::class, 'index'])->name('blog');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blogs/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blogs/{blog:slug}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blogs/{blog:slug}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blogs/{blog:slug}', [BlogController::class, 'destroy'])->name('blog.destroy');
