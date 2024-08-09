<?php

use App\Http\Controllers\BestParfumController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', [BestParfumController::class, 'index'] );
