<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get("/", fn() => response()->json(["message" => "api is working"]));


Route::controller(AuthController::class)->group(function () {
    Route::post("/register", "register");
    Route::post("/login", "login");
});

Route::apiResource("customer", CustomerController::class);
