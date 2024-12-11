<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\Auth\ApiAuthController;

Route::middleware('auth:api', 'throttle:user')->get('/reports/top-division', [ReportController::class, 'topDivisionByMonth']);
Route::middleware('auth:api', 'throttle:user')->get('/reports/top-category', [ReportController::class, 'topCategoryByMonth']);
Route::middleware('throttle:global')->post('/login', [ApiAuthController::class, 'login']);
Route::middleware('throttle:global')->post('/register', [ApiAuthController::class, 'register']);
