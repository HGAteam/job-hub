<?php
use App\Http\Controllers\FrontController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
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

Route::middleware(['maintenance_mode'])->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('welcome');
    Route::get('who-are-we', [FrontController::class, 'whoAreWe'])->name('who_are_we');
    Route::get('products', [ProductController::class, 'index'])->name('products.index');
    Route::get('products/something', [ProductController::class, 'show'])->name('products.show');
    Route::get('services', [ServiceController::class, 'index'])->name('services.index');
    Route::get('services/something', [ServiceController::class, 'show'])->name('services.show');
    Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('contact', [ContactController::class, 'store'])->name('contact.store');
    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/something', [BlogController::class, 'show'])->name('blog.show');
});
