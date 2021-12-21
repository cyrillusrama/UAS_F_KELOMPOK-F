<?php

use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\Frontend\AccountController;
use App\Http\Controllers\Frontend\AuthController;
use App\Http\Controllers\Frontend\DestinationController;
use App\Http\Controllers\Frontend\HistoryOrderController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\OrderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home.index');

Route::get('login', [AuthController::class, 'loginPage'])->name('login.index');
Route::get('register', [AuthController::class, 'registerPage'])->name('register.index');
Route::get('account', [AccountController::class, 'index'])->name('account.index');
Route::get('users/{id}', [AccountController::class, 'edit'])->name('account.show');
Route::get('destination', DestinationController::class)->name('destination.index');
Route::get('order', [OrderController::class, 'index'])->name('order.index');
Route::get('order/{id}', [OrderController::class, 'edit'])->name('order.edit');
Route::get('order-history', HistoryOrderController::class)->name('history_order.index');


// Verification Account
Auth::routes([
    'register' => false,
    'login' => false,
    'verify' => true
]);
