<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        return Alumno::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:alumnos,email',
        ]);

        return Alumno::create($request->all());
    }

    public function show(Alumno $alumno)
    {
        return $alumno->load('evaluaciones');
    }

    public function update(Request $request, Alumno $alumno)
    {
        $alumno->update($request->all());
        return $alumno;
    }

    public function destroy(Alumno $alumno)
    {
        $alumno->delete();
        return response()->json(['mensaje' => 'Alumno eliminado']);
    }
}
