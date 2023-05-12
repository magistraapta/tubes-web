<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserRegister;
use App\Http\Controllers\bukuController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [bukuController::class, 'getAllBook']);

Route::get('login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');


Route::get('/register', [UserRegister::class, 'index'])->name('user.register');
Route::post('/register/store', [UserRegister::class, 'store']);
Route::post('logout', [LoginController::class, 'logout']);

Route::get('dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('dashboard', [DashboardController::class, 'getAllBook'])->middleware('auth');

Route::get('create', [bukuController::class, 'create']);
Route::post('store', [bukuController::class, 'store']);
Route::delete('/detail/{id}', [bukuController::class, 'destroy']);
Route::get('detail/{id}', [bukuController::class, 'getById']);
Route::get('detail/{id}/edit', [bukuController::class, 'edit']);
Route::put('detail/{id}', [bukuController::class, 'update']);

Route::get('checkout', [CheckoutController::class, 'index'])->name('member.checkout')->middleware('auth');