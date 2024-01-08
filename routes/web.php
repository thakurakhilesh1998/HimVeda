<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TestSeriesController;



Route::prefix('admin')->group(function()
{
    Route::get('/create-test',[TestSeriesController::class,'index']);
});