<?php
use App\Http\Controllers\PaisController;
Route::get('/paises', [PaisController::class, 'index']);
Route::get('/paises/{id}', [PaisController::class, 'show']); // Detalhes do país
Route::get('/paises/{id}/estados', [PaisController::class, 'estados']); // Lista de estados
Route::get('/paises/{paisId}/estados/{estadoId}', [PaisController::class, 'showEstado']); // Detalhes do estado
Route::get('/paises/{paisId}/estados/{estadoId}/cidades', [PaisController::class, 'cidades']); // Lista de cidades
Route::get('/paises/{paisId}/estados/{estadoId}/cidades/{cidadeId}', [PaisController::class, 'showCidade']); // Detalhes da cidade

