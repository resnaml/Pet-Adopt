<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AllpetsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

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
    return view('welcome');
});

// Route::get('home', [DashboardController::class, 'index', 'index'])->name('admin.dashboard');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('admin.dashboard');
    Route::resource('pet', PetController::class, ['as' => 'admin']);
    Route::resource('pets', AllpetsController::class, ['as' => 'admin']);
    Route::resource('users', UserController::class, ['as' => 'admin']);
});