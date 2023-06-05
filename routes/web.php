<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrangController;

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

Route::get('/', [OrangController::class, 'index'])->name('home');

Route::prefix('orang')->group(function () {
    Route::post('/add', [OrangController::class, 'create'])->name('create');
    Route::get('/list', [OrangController::class, 'show'])->name('list');
    Route::get('/download/{id}', [OrangController::class, 'download'])->name('download');
    Route::get('/edit/{id}', [OrangController::class, 'edit'])->name('edit');
    Route::post('/edit/{id}', [OrangController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [OrangController::class, 'delete'])->name('delete');
});
