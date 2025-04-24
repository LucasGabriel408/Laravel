<?php

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
Route::get('/teste/{valor1}/{valor2}', function($valor1,$valor2) {
    $soma = $valor1 + $valor2;
    return "The test of the addition: {$soma}";
});

// Cálculos
