<?php

use Azim1993\ExpensePlanner\Http\Controllers\MonthlyPlanController;
use Illuminate\Support\Facades\Route;

Route::prefix('planner')->group(function() {
    Route::resource('monthly-plans', MonthlyPlanController::class);
});

