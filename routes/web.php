<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::middleware(['auth:sanctum', 'verified'])->prefix('user')->group(function () {

});

Route::middleware(['auth:sanctum', 'verified', 'role:admin,manager,content-manager,web-developer,copywriter,marketing-specialist'])->prefix('admin')->namespace('App\Http\Controllers\Admin')->group(function () {
    Route::get('/', IndexController::class)->name('admin.main');
    Route::get('/dashboard', DashboardController::class)->name('admin.dashboard');

    Route::prefix('task')->namespace('Task')->group(function () {
        Route::get('/create', IndexController::class)->name('admin.task.create');
        Route::post('/', StoreController::class)->name('admin.task.store');
    });
});
