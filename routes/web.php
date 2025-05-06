<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/teste/{valor}', function ($valor) {
    return "Você digitou: {$valor}";
});

//Calculos
Route::get('/calc/somar/{x}/{y}', [CalculosController::class, 'somar']);

Route::get('/calc/subtrair/{x}/{y}', [CalculosController::class, 'subtrair']);

Route::get('/calc/quadrado/{x}', [CalculosController::class, 'quadrado']);

// Keepinho 
Route::prefix('/keep') ->group(function(){
    Route::get('/',[KeepinhoController::class, 'index'])->name('keep');

    Route::post('/gravar', [KeepinhoController::class,'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}',[KeepinhoController::class,'editar'
    ])->name('keep.editar');

    Route::put('/editar', [KeepinhoController::class,'editar'])->name('keep.editarGravar');

    Route::delete('/apagar/{nota}', [KeepinhoController::class,'apagar'])->name('keep.apagar');
});