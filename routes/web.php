<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\TransactionController;
use App\Http\Controllers\user\RegisterController;
use App\Http\Controllers\user\LoginController as UserLoginController;
use GuzzleHttp\Middleware;

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


Route::get('admin/login', [LoginController::class, 'index'])->name('admin.login');
Route::post('admin/login', [LoginController::class, 'authenticate'])->name('admin.login.auth');

Route::group(['prefix' => 'admin', 'middleware' => ['admin.auth']], function(){
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');

    Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');

    Route::get('books', [BookController::class, 'index'])->name('admin.books');
    Route::get('books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('books/store', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('admin.book.edit');
    Route::put('/update/{id}', [BookController::class, 'update'])->name('admin.book.update');
    Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('admin.book.delete');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.transaction');

    
});

Route::view('/', 'user.index')->name('user.index');
Route::group(['prefix' => 'user'], function(){
    Route::get('register', [RegisterController::class, 'index'])->name('user.register');
    Route::post('register', [RegisterController::class, 'store'])->name('user.register');
    Route::get('login', [UserLoginController::class, 'index'])->name('user.login');
});