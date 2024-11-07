<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;

Route::get("/", [AuthController::class, 'index']);
Route::post("login", action: [AuthController::class, 'login']);
Route::get("logout", [AuthController::class, 'logout']);
Route::get('forgot-password', [AuthController::class,'forgotPassword']);
Route::post('forgot-password', [AuthController::class,'postForgotPassword']);


Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
});

Route::prefix('front_desk')->middleware('front_desk')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);

    // rooms
    Route::get('room/list', [RoomController::class, 'index']);
});

Route::prefix('housekeeper')->middleware('housekeeper')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
});

Route::prefix('workman')->middleware('workman')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard']);
});
