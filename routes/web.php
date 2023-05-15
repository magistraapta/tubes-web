<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\TransactionController;

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



Route::group(['prefix' => 'admin'], function(){
    Route::view('/', 'admin.dashboard')->name('admin.dashboard');

    Route::get('books', [BookController::class, 'index'])->name('admin.books');
    Route::get('books/create', [BookController::class, 'create'])->name('admin.books.create');
    Route::post('books/store', [BookController::class, 'store'])->name('admin.books.store');
    Route::get('/edit/{id}', [BookController::class, 'edit'])->name('admin.book.edit');
    Route::put('/update/{id}', [BookController::class, 'update'])->name('admin.book.update');
    Route::delete('/delete/{id}', [BookController::class, 'destroy'])->name('admin.book.delete');

    Route::get('/transactions', [TransactionController::class, 'index'])->name('admin.transaction');
});