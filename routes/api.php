<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\DestinationController;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('login', [AuthController::class, 'login'])->name('api.login');
Route::post('register', [AuthController::class, 'register'])->name('api.register');
Route::get('users', [UserController::class, 'index'])
    ->middleware('auth:sanctum')
    ->name('api.users.index');
Route::get('users/{id}', [UserController::class, 'show'])
    ->middleware('auth:sanctum')
    ->name('api.users.show');
Route::delete('users/{id}', [UserController::class, 'delete'])->name('api.users.delete');
Route::put('users/{id}', [UserController::class, 'update'])->name('api.users.update');
Route::get('destination', [DestinationController::class, 'destination'])->name('api.destination.index');
Route::get('orders', [OrderController::class, 'history'])->name('api.order.history');
Route::get('orders/{id}', [OrderController::class, 'show'])->name('api.order.show');
Route::put('orders/{id}', [OrderController::class, 'update'])->name('api.order.update');
Route::post('orders', [OrderController::class, 'store'])->name('api.order.store');
Route::delete('orders/{id}', [OrderController::class, 'delete'])->name('api.order.delete');
