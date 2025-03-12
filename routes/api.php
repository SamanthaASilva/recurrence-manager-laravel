<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;


Route::prefix('/recurrences')->group(function () {
    Route::get('/', [Controller::class, 'getRecurrencesByClientId']);
});
