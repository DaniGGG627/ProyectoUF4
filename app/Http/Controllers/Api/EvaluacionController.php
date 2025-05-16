<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Evaluacion;
use Illuminate\Http\Request;

class EvaluacionController extends Controller
{
    public function index()
    {
        return Evaluacion::with(['alumno', 'unidadFormativa'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'alumno_id' => 'required|exists:alumnos,id',
            'unidad_formativa_id' => 'required|exists:unidad_formativas,id',
            'nota' => 'required|numeric|between:0,10',
        ]);

        return Evaluacion::create($request->all());
    }

    public function show(Evaluacion $evaluacion)
    {
        return $evaluacion->load(['alumno', 'unidadFormativa']);
    }

    public function update(Request $request, Evaluacion $evaluacion)
    {
        $evaluacion->update($request->all());
        return $evaluacion;
    }

    public function destroy(Evaluacion $evaluacion)
    {
        $evaluacion->delete();
        return response()->json(['mensaje' => 'Evaluación eliminada']);
    }
}
