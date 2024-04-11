<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Multimedia\LibraryController;
use App\Http\Controllers\Admin\NavigationController;
use App\Http\Controllers\Admin\ThemeController;
use App\Http\Controllers\Admin\UserManager\PermissionController;
use App\Http\Controllers\Admin\UserManager\RoleController;
use App\Http\Controllers\Auth\SocialiteLoginController;
use App\Http\Controllers\Admin\Logs\AuditLogsController;
use App\Http\Controllers\Admin\Logs\SystemLogsController;
use App\Http\Controllers\Admin\UserManager\UserController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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

Route::get('/language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/translations/{locale}', function ($locale) {
    $path = resource_path("lang/{$locale}.json");
    return response()->file($path);
});

$menu = theme()->getMenu();
array_walk($menu, function ($val) {
    if (isset($val['path'])) {
        $route = Route::get($val['path'], [PagesController::class, 'index']);

        // Exclude documentation from auth middleware
        if (!Str::contains($val['path'], 'documentation')) {
            $route->middleware('auth');
        }
    }
});

// Documentations pages
// Route::prefix('documentation')->group(function () {
//     Route::get('getting-started/references', [
//         ReferencesController::class,
//         'index',
//     ]);
//     Route::get('getting-started/changelog', [PagesController::class, 'index']);
// });

Route::middleware('auth')->group(function () {

    // Dashboard
    Route::prefix('home')->group(function(){
        Route::get('/', [DashboardController::class,'index'])->name('dashboard');

        require __DIR__ . '/ecommerce.php';

        // Account pages
        Route::prefix('account')->name('account.')->group(function () {
            Route::get('overview', function(){
                return view('pages.dashboard.account.overview.overview');
            })->name('overview.index');

            Route::get('settings', [SettingsController::class, 'index'])->name('settings.index');
            Route::put('settings', [SettingsController::class, 'update'])->name('settings.update');
            Route::put('settings/email', [SettingsController::class, 'changeEmail'])->name('settings.changeEmail');
            Route::put('settings/password', [SettingsController::class, 'changePassword'])->name('settings.changePassword');
        });

        Route::get('settings',[DashboardController::class,'create'])->name('settings.index');

        // Logs pages
        Route::prefix('monitor')->name('monitor.')->group(function () {
            Route::resource('system', SystemLogsController::class)->only(['index', 'destroy']);
            Route::resource('audit', AuditLogsController::class)->only(['index', 'destroy']);
        });

        // User Manager
        Route::prefix('user-manager')->name('user-manager.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::post('activate/{id}', [UserController::class, 'activateUserAccount'])->name('activate');
            Route::get('profile/overview/{slug}', [UserController::class, 'show'])->name('show');
            Route::get('profile/settings/{slug}', [UserController::class, 'edit'])->name('edit');
            Route::post('profile/settings/{slug}', [UserController::class, 'update'])->name('update');
            Route::get('get-users', [UserController::class, 'getUsers'])->name('get_users');
            Route::post('add-new', [UserController::class, 'store'])->name('store');
            Route::delete('delete/{id}', [UserController::class, 'destroy'])->name('delete');
            Route::post('export', [UserController::class, 'exportUsers']);
            Route::prefix('roles')->name('roles.')->group(function(){
                Route::get('',[RoleController::class,'index'])->name('index');
                Route::get('get-roles',[RoleController::class,'getRoles'])->name('get_roles');
                Route::get('{id}',[RoleController::class,'show'])->name('show');
            });
            Route::prefix('permissions')->name('permissions.')->group(function(){
                Route::get('',[PermissionController::class,'index'])->name('index');
                Route::get('get-permissions', [PermissionController::class, 'getPermissions'])->name('get_permissions');
            });
        });

        // Multimedia
        Route::prefix('multimedia')->name('multimedia.')->group(function(){
            Route::prefix('library')->name('library.')->group(function(){
                Route::get('', [LibraryController::class,'index'])->name('index');
                Route::get('get-files', [LibraryController::class,'getFiles'])->name('get_files');
                Route::get('create', [LibraryController::class,'create'])->name('create');
                Route::post('store', [LibraryController::class,'store'])->name('store');
                Route::delete('delete/{id}', [LibraryController::class,'destroy'])->name('destroy');
            });
        });

        // Page Settings
        Route::prefix('page-settings')->name('page-settings.')->group(function(){
            Route::get('navbar', [NavigationController::class,'index'])->name('navbar.index');
            Route::prefix('themes')->name('themes.')->group(function(){
                Route::get('', [ThemeController::class,'index'])->name('index');
                Route::get('get-themes', [ThemeController::class,'getThemes'])->name('get_themes');
            });
        });
    });

});

/**
 * Socialite login using Google service
 * https://laravel.com/docs/8.x/socialite
 */
Route::get('/auth/redirect/{provider}', [SocialiteLoginController::class, 'redirect']);

require __DIR__ . '/front.php';
require __DIR__ . '/auth.php';
