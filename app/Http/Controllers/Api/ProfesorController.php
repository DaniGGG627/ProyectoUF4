<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profesor;
use Illuminate\Http\Request;

class ProfesorController extends Controller
{
    public function index()
    {
        return Profesor::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:profesores,email',
        ]);

        return Profesor::create($request->all());
    }

    public function show(Profesor $profesor)
    {
        return $profesor;
    }

    public function update(Request $request, Profesor $profesor)
    {
        $profesor->update($request->all());
        return $profesor;
    }

    public function destroy(Profesor $profesor)
    {
        $profesor->delete();
        return response()->json(['mensaje' => 'Profesor eliminado']);
    }
}
