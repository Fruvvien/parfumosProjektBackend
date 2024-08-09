<?php

use App\Http\Controllers\BestParfumController;
use App\Http\Controllers\SimpleParfumController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view();
}); */

Route::get("/", [BestParfumController::class, "getData"]);
Route::get("/simpleParfum", [SimpleParfumController::class, "getDataFromSimpleParfum"]);

