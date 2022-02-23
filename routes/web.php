<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeldController;
use App\Http\Controllers\SpendingController;
use App\Http\Controllers\ContainerController;


Route::get("/", function () { return view("home"); });

Route::middleware(["auth"])->group(function() {

    // GELD
    Route::get("/geld", [GeldController::class, "index"]);
    
    // CONTAINER
    Route::post("/container", [ContainerController::class, "store"]);
    Route::delete("/container/{id}", [ContainerController::class, "delete"]);
    
    // SPENDINGS
    Route::post("/spending", [SpendingController::class, "store"]);
    Route::delete("/spending/{id}", [SpendingController::class, "delete"]);

});


Auth::routes();