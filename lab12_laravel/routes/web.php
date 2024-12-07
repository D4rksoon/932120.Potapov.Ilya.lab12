<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'home']);

Route::get('/Calc/Manual', [MainController::class, 'manual']);
Route::post('/Calc/Manual', [MainController::class, 'manual_result']);

Route::get('/Calc/ManualWithSeparateHandlers', [MainController::class, 'manualSeparateHandler']);
Route::post('/Calc/ManualWithSeparateHandlers', [MainController::class, 'manualSeparateHandler_result']);

Route::get('/Calc/ModelBindingInParameters', [MainController::class, 'modelParameters']);
Route::post('/Calc/ModelBindingInParameters', [MainController::class, 'modelParameters_result']);

Route::get('/Calc/ModelBindingInSeparateModel', [MainController::class, 'modelSeparateModel']);
Route::post('/Calc/ModelBindingInSeparateModel', [MainController::class, 'modelSeparateModel_result']);

