<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evaluacion;
use App\Models\UnidadFormativa;
use App\Models\Alumno;

class EvaluacionController extends Controller
{
    public function index()
    {
        $evaluaciones = Evaluacion::with('alumno', 'unidadFormativa')->get();
        return view('evaluaciones.index', compact('evaluaciones'));
    }

    public function create()
    {
        $alumnos = Alumno::all();
        $ufs = UnidadFormativa::all();
        return view('evaluaciones.create', compact('alumnos', 'ufs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unidad_formativa_id' => 'required',
            'alumno_id' => 'required',
            'nota' => 'required|numeric|min:0|max:10',
        ]);

        Evaluacion::create($request->all());
        return redirect()->route('evaluaciones.index');
    }

    public function show(Evaluacion $evaluacion)
    {
        return view('evaluaciones.show', compact('evaluacion'));
    }

    public function edit(Evaluacion $evaluacion)
    {
        $alumnos = Alumno::all();
        $ufs = UnidadFormativa::all();
        return view('evaluaciones.edit', compact('evaluacion', 'alumnos', 'ufs'));
    }

    public function update(Request $request, Evaluacion $evaluacion)
    {
        $request->validate([
            'unidad_formativa_id' => 'required',
            'alumno_id' => 'required',
            'nota' => 'required|numeric|min:0|max:10',
        ]);
    
        $evaluacion->update($request->all());
        return redirect()->route('evaluaciones.index');
    }

    public function destroy(Evaluacion $evaluacion)
    {
        $evaluacion->delete();
        return redirect()->route('evaluaciones.index');
    }
}

