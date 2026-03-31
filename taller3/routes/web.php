<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginaController;

Route::get('/', [PaginaController::class, 'inicio']);

Route::get('/inscripcion', [PaginaController::class, 'inscripcion']);

Route::get('/inscritos', [PaginaController::class, 'inscritos']);
use App\Http\Controllers\PqrsController;

Route::post('/guardar-inscripcion', [PqrsController::class, 'guardarInscripcion'])
    ->name('guardar.inscripcion');