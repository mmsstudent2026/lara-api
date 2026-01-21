<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TempController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

Route::get("/", fn() => response()->json(["message" => "api is working"]));


Route::controller(AuthController::class)->group(function () {
    Route::post("/register", "register");
    Route::post("/login", "login");
});

Route::controller(TempController::class)->prefix("temp")->group(function () {
    Route::get("/", "index");
    Route::get("/destroy", "destroy");
});


Route::middleware('auth:sanctum')->group(function () {
    Route::controller(ProfileController::class)->prefix('user-profile')->group(function () {
        Route::get('/show', 'show');
        Route::patch('/logout', 'logout');
        Route::patch('/change-password', 'changePassword');
        Route::patch('/change-name', 'changeName');
    });
    Route::apiResource("customer", CustomerController::class);
});
