<?php
use Inertia\Inertia;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BidderController;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/bidders', [BidderController::class, 'index']);

Route::get('/cars', [CarController::class, 'index']);


