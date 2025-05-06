<?php

use App\Http\Controllers\CalculosController;
use App\Http\Controllers\KeepinhoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/teste', function() {
      return view('teste');
 });

 Route::get('/teste/{valor}', function($valor) {
     return "The test is working whit: {$valor}";
 });

/** desenvolver uma rota chamada 'soma', que receba 2 valores e apresente a soma */


// Cálculos
Route::get('/calc/somar/{x}/{y}' , [CalculosController::class, 'somar'] );
Route::get('/calc/sub/{x}/{y}' , [CalculosController::class, 'sub'] );

// Criar a rota do número ao quadradro
Route::get('/calc/quadrado/{x}' , [CalculosController::class, 'quadrado']);



// Keepinho
Route::prefix('/keep')->group(function(){
    Route::get('/', [KeepinhoController::class, 'index'])
    ->name('keep');
    
    Route::post('/gravar', [KeepinhoController::class,
    'gravar'])->name('keep.gravar');

    Route::get('/editar/{nota}', [KeepinhoController::class,
    'editar'])->name('keep.editar'); // Formulário

    Route::put('editar', [KeepinhoController::class,
    'editar'])->name('keep.editarGravar'); // Ação

    Route::delete('/apagar/{nota}', [KeepinhoController::class, 'apagar'])->name('keep.apagar'); // Deletar
    
});