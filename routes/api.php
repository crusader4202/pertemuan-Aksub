<?php

use App\Http\Controllers\ApiController;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', [ApiController::class, 'index']);

Route::post('/login', [ApiController::class, 'login']);
Route::middleware('auth:sanctum')->post('/logout', [ApiController::class, 'logout']);

Route::middleware('auth:sanctum')->post('/add', [ApiController::class, 'create']);
Route::middleware('auth:sanctum')->post('/edit/{id}', [ApiController::class, 'update']);
Route::middleware('auth:sanctum')->delete('/delete/{id}', [ApiController::class, 'delete']);
