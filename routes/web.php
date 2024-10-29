<?php

use App\Http\Controllers\Inspection\InspectionController;
use Illuminate\Support\Facades\Route;


Route::get('/', [InspectionController::class, 'index']);

Route::get('/inspections', [InspectionController::class, 'index']);
Route::resource('inspections', InspectionController::class);
