<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BidderController;
use App\Http\Controllers\CarController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/bidders', [BidderController::class, 'index']);
Route::get('/cars', [CarController::class, 'index']);

