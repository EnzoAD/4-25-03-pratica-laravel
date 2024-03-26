<?php

use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/veiculos', [VeiculoController::class, 'showAll']);
Route::get('/veiculos/novo', [VeiculoController::class, 'compose']);
Route::post('/veiculos/novo', [VeiculoController::class, 'store']);