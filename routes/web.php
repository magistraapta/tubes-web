<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bukuController;
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


Route::get('login', function(){
    return view('login');
});

Route::get('create', [bukuController::class, 'create']);
Route::post('store', [bukuController::class, 'store']);
Route::delete('/detail/{id}', [bukuController::class, 'destroy']);
Route::get('detail/{id}', [bukuController::class, 'getById']);
Route::get('detail/{id}/edit', [bukuController::class, 'edit']);
Route::put('detail/{id}', [bukuController::class, 'update']);