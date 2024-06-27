<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [imcController::class, 'index']);

Route::get('/imc/calcularImc',  [imcController::class, 'calcularImc'])->name('imc.calcular');
Route::post('/imc/store',[ImcController::class,'store'])->name('imc.store');
