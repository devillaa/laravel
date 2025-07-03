<?php

use App\Http\Controllers\CarrinhosController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\ProfileController;
use App\Models\Produto;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionariosController;
use App\Http\Controllers\KeepinhoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Keepinho 
Route::prefix('/keep')->group(function(){
    Route::get('/',[KeepinhoController::class, 'index'])->name('keep');

    Route::post('/gravar', [KeepinhoController::class,'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}',[KeepinhoController::class,'editar'
    ])->name('keep.editar');

    Route::put('/editar', [KeepinhoController::class,'editar'])->name('keep.editarGravar');

    Route::delete('/apagar/{nota}', [KeepinhoController::class,'apagar'])->name('keep.apagar');

    Route::get('/lixeira', [KeepinhoController::class,'lixeira'])->name('keep.lixeira');

    Route::get('/restaurar/{nota}', [KeepinhoController::class,'restaurar'])->name('keep.restaurar');

});

// Trabalho pw

Route::prefix('/empresa') ->group(function(){
    Route::get('/',[FuncionariosController::class, 'index'])->name('empresa');

    Route::get('/editar/{funcionario}',[FuncionariosController::class,'editar'
    ])->name('empresa.editar');

    Route::put('/editar', [FuncionariosController::class,'editar'])->name('empresa.editarGravar');

    Route::post('/gravar', [FuncionariosController::class,'gravar'])->name('empresa.gravar');

    Route::delete('/excluir/{funcionario}', [FuncionariosController::class,'excluir'])->name('empresa.excluir');
});


Route::resource('produtos', ProdutosController::class);

//CARRINHO
Route::prefix('/carrinho')->group(function(){
    Route::get('/', [CarrinhosController::class, 'index'])->name('carrinho');
    Route::get('/adicionar/{produto}', [CarrinhosController::class, 'salvar'])->name('carrinho.salvar');
    Route::get('/deletar/{id}', [CarrinhosController::class, 'deletar'])->name('carrinho.deletar');
});

Route::resource('categorias', CategoriasController::class);

require __DIR__.'/auth.php';