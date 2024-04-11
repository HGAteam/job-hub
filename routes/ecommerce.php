<?php
// Ecommerce Controllers
use App\Http\Controllers\Admin\Ecommerce\Customer\CustomerController;
use App\Http\Controllers\Admin\Ecommerce\Order\OrderController;
use App\Http\Controllers\Admin\Ecommerce\Product\ProductController;
use App\Http\Controllers\Admin\Ecommerce\Product\CategoryController;
use App\Http\Controllers\Admin\Ecommerce\Report\ReportController;
use App\Http\Controllers\Admin\Ecommerce\SettingController;
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
Route::prefix('shop')->name('shop.')->group(function () {
    // Products
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('add-product', [ProductController::class, 'create'])->name('create');
        Route::prefix('categories')->name('categories.')->group(function () {
            Route::get('', [CategoryController::class, 'index'])->name('index');
            Route::get('add-category', [CategoryController::class, 'create'])->name('create');
        });
    });

    // Sales
    Route::prefix('sales')->name('sales.')->group(function () {
        Route::prefix('orders')->name('orders.')->group(function () {
            Route::get('', [OrderController::class, 'index'])->name('index');
            Route::get('add-order', [OrderController::class, 'create'])->name('create');
        });
    });

    // Customers
    Route::prefix('customers')->name('customers.')->group(function () {
        Route::get('', [CustomerController::class, 'index'])->name('index');
    });

    // Reports
    Route::prefix('reports')->name('reports.')->group(function () {
        Route::get('products-viewed', [ReportController::class, 'index_view'])->name('index');
        Route::get('sales', [ReportController::class, 'index_sales'])->name('index');
        Route::get('returns', [ReportController::class, 'index_returns'])->name('index');
        Route::get('customer-orders', [ReportController::class, 'index_customer_orders'])->name('index');
        Route::get('shipping', [ReportController::class, 'index_shipping'])->name('index');
    });
    Route::get('settings', [SettingController::class, 'index'])->name('index');
});
