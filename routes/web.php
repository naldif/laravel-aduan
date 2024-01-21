<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\AduanController;
use App\Http\Controllers\Dashboard\FooterController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\PermissionController;
use App\Http\Controllers\Dashboard\RemoveRoleFromUserController;
use App\Http\Controllers\Dashboard\RevokePermissionFromRoleController;
use App\Http\Controllers\Dashboard\RevokePermissionFromUserController;

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

/*
|--------------------------------------------------------------------------
| Dashboard Routes
|--------------------------------------------------------------------------
|
*/
Route::middleware(['auth', 'role:admin|moderator'])->prefix('/dashboard')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.index');
    Route::resource('/aduan', AduanController::class);
    Route::post('/aduan/{id}/store-status', [AduanController::class, 'updateStatus'])->name('aduan.store_status');
    Route::resource('/categories', CategoryController::class);
    Route::get('/footer', [FooterController::class, 'edit'])->name('footer.edit');
    Route::post('/update-footers', [FooterController::class, 'updateFooters']);
    Route::resource('/permissions', PermissionController::class);
    Route::resource('/posts', PostController::class);
    Route::delete('/users/{user}/roles/{role}', RemoveRoleFromUserController::class)->name('users.roles.destroy');
    Route::delete('/roles/{role}/permissions/{permission}', RevokePermissionFromRoleController::class)->name('roles.permissions.destroy');
    Route::delete('/users/{user}/permissions/{permission}', RevokePermissionFromUserController::class)->name('users.permissions.destroy');
});

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/poststag/{slug}', [PostController::class, 'postByTag'])->name('posts.tag');
Route::get('/postscategory/{slug}', [PostController::class, 'postByCategory'])->name('posts.category');
Route::get('/posts/{slug}', [PostController::class, 'show'])->name('posts.detail');

require __DIR__.'/auth.php';
