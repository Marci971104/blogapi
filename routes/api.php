<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AuthController;





Route::group(["middleware"=>[ "auth:sanctum" ]],function(){
    Route::post("/logout",[AuthController::class,"logout"]);
    Route::post("/blogs",[BlogController::class,"store"]);
    Route::put("/blogs/{blog}",[BlogController::class,"update"]);
    Route::delete("/blogs/{id}",[BlogController::class,"destroy"]);

});

Route::post("/register",[AuthController::class,"signup"]);
Route::post("/login",[AuthController::class,"signin"]);
Route::get( "/blogs",[BlogController::class,"index" ]);
Route::get("/blogs/{id}",[BlogController::class,"show"]);
