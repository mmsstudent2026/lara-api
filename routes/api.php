<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Sanctum\Sanctum;

Route::get("/", fn() => response()->json(["message" => "api is working"]));


Route::controller(AuthController::class)->group(function () {
    Route::post("/register", "register");
    Route::post("/login", "login");
});


Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource("customer", CustomerController::class);
});
