<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Dashboard\DashboardController;
use \App\Http\Controllers\User\UserController;
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

Route::middleware("guest")->group(function (){
    Route::post("/login",[AuthController::class,"login"]);
    Route::view("/login","auth.login");
    Route::post("/register",[\App\Http\Controllers\Auth\AuthController::class,"register"]);
    Route::view("/register","auth.register");
});

Route::middleware("auth")->group(function (){
    Route::get("/",[DashboardController::class,"index"]);
    Route::post("/logout",[AuthController::class,"logout"]);

    Route::resource("users",UserController::class);
});

