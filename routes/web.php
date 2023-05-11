<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserAccountController;
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


Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/job/about', [JobController::class, 'about'])->name('about');
Route::get('/job/ourteam', [JobController::class, 'ourteam'])->name('ourteam');

Route::resource('/job', JobController::class)
  ->only(['create', 'store', 'edit', 'update', 'destroy'])
  ->middleware('auth');
Route::resource('/job', JobController::class)
  ->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::resource('user', UserAccountController::class)
  ->only(['create','store']);

Route::get('login', [AuthController::class, 'create'])
  ->name('login');



Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');


});
