<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    return view('pages.auth.login');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    // Route::resource('pages.dashboard', DashboardController::class);

    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
    // Route::post('products-delete', ProductController::class);
    Route::resource('categories', CategoryController::class);


});
