<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\UnidadFormativa;
use Illuminate\Http\Request;

class UnidadFormativaController extends Controller
{
    public function index()
    {
        return UnidadFormativa::with(['modulo', 'profesor'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            'descripcion' => 'nullable|string',
            'modulo_id' => 'required|exists:modulos,id',
            'profesor_id' => 'nullable|exists:profesores,id',
        ]);

        return UnidadFormativa::create($request->all());
    }

    public function show(UnidadFormativa $unidadFormativa)
    {
        return $unidadFormativa->load(['modulo', 'profesor']);
    }

    public function update(Request $request, UnidadFormativa $unidadFormativa)
    {
        $unidadFormativa->update($request->all());
        return $unidadFormativa;
    }

    public function destroy(UnidadFormativa $unidadFormativa)
    {
        $unidadFormativa->delete();
        return response()->json(['mensaje' => 'Unidad formativa eliminada']);
    }
}
