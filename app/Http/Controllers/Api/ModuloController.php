<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Modulo;
use Illuminate\Http\Request;

class ModuloController extends Controller
{
    public function index()
    {
        return Modulo::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
        ]);

        return Modulo::create($request->all());
    }

    public function show(Modulo $modulo)
    {
        return $modulo;
    }

    public function update(Request $request, Modulo $modulo)
    {
        $modulo->update($request->all());
        return $modulo;
    }

    public function destroy(Modulo $modulo)
    {
        $modulo->delete();
        return response()->json(['mensaje' => 'Módulo eliminado']);
    }
}
