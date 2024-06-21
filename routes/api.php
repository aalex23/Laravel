<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\MarqueController;
use App\Http\Controllers\CpuController;
use App\Http\Controllers\GpuController;
use App\Http\Controllers\OsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->group(function(){
    Route::post('logout', [AuthController::class,'logout']);
});

Route::get('/laptops', [LaptopController::class, 'index']);
Route::get('/marques', [MarqueController::class, 'index']);
Route::get('/os', [OsController::class, 'index']);
Route::get('/gpus', [GpuController::class, 'index']);
Route::get('/cpus', [CpuController::class, 'index']);
Route::get('/wishlists', [WishlistController::class, 'index']);
Route::get('/users', [UserController::class, 'index']);


Route::delete('/wishlists/{id}', [WishlistController::class, 'destroy']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::post('/wishlists', [WishlistController::class, 'store']);

Route::post('register', [AuthController::class,'register']);
Route::post('login', [AuthController::class,'login']);
