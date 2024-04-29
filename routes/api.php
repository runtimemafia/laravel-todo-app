<?php

use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use function Pest\Laravel\patch;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get("/", function(){
    return "/api is working";
});

Route::get("/todos", [TodoController::class, "getall"])->name("all");

Route::post("/new", [TodoController::class,"new"])->name("new");

Route::delete("/{id}", [TodoController::class,"delete"])->name("delete");

Route::patch("/{id}", [TodoController::class,"markDone"])->name("markdone");