<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:api', 'scope:orders.write'])->group(function (): void {
    Route::post('/orders', [OrderController::class, 'store']);
});
