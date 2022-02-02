<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get( "/blogs",[BlogController::class,"index" ]);
Route::post("/blogs",[BlogController::class,"store"]);
Route::get("/blogs/{id}",[BlogController::class,"show"]);
Route::put("/blogs/{blog}",[BlogController::class,"update"]);
Route::delete("/blogs/{id}",[BlogController::class,"destroy"]);