<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [imcController::class, 'index']);

Route::get('/imc/calcularImc',  [imcController::class, 'calcularImc'])->name('imc.calcular');
Route::post('/imc/store',[imcController::class,'store'])->name('imc.store');
route::get('/imc/show',[imcController::class,'show'])->name('imc.show');
route::delete('/imc/delete/{id}',[imcController::class,'destroy'])->name('imc.delete');
route::put('/imc/update/{id}',[imcController::class,'update'])->name('imc.update');
