<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;
use App\Http\Controllers\PqrsController;

Route::get('/', [PaginaController::class, 'inicio']);

Route::get('/inscripcion', [PaginaController::class, 'inscripcion']);

Route::get('/inscritos', [PaginaController::class, 'inscritos']);

Route::post('/guardar-atleta', [PqrsController::class, 'guardar'])
    ->name('guardar.atleta');