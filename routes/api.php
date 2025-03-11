<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::prefix('/recurrence')->group(function () {
    Route::get('/recurrence', [Controller::class, 'getRecurrence']);
});
