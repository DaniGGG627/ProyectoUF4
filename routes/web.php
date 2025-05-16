<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\ModuloController;
use App\Http\Controllers\Web\UnidadFormativaController;
use App\Http\Controllers\Web\ProfesorController;
use App\Http\Controllers\Web\AlumnoController;
use App\Http\Controllers\Web\EvaluacionController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('modulos', ModuloController::class);
Route::resource('unidad-formativas', UnidadFormativaController::class);
Route::resource('profesores', ProfesorController::class);
Route::resource('alumnos', AlumnoController::class);
Route::resource('evaluaciones', EvaluacionController::class);
Route::put('evaluaciones/{evaluacion}', [EvaluacionController::class, 'update'])->name('evaluaciones.update');

