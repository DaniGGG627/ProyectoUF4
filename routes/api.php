<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AlumnoController;
use App\Http\Controllers\Api\EvaluacionController;
use App\Http\Controllers\Api\ModuloController;
use App\Http\Controllers\Api\ProfesorController;
use App\Http\Controllers\Api\UnidadFormativaController;


Route::apiResource('alumnos', AlumnoController::class);
Route::apiResource('evaluaciones', EvaluacionController::class);
Route::apiResource('modulos', ModuloController::class);
Route::apiResource('profesores', ProfesorController::class);
Route::apiResource('unidad-formativas', UnidadFormativaController::class);

