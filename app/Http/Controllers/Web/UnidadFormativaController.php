<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UnidadFormativa;
use App\Models\Modulo;
use App\Models\Profesor;

class UnidadFormativaController extends Controller
{
    public function index()
    {
        $ufs = UnidadFormativa::with('modulo', 'profesor')->get();
        return view('unidad-formativas.index', compact('ufs'));
    }

    public function create()
    {
        $modulos = Modulo::all();
        $profesores = Profesor::all();
        return view('unidad-formativas.create', compact('modulos', 'profesores'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'modulo_id' => 'required',
            'profesor_id' => 'required',
        ]);

        UnidadFormativa::create($request->all());
        return redirect()->route('unidad-formativas.index');
    }

    public function show(UnidadFormativa $unidadFormativa)
    {
        return view('unidad-formativas.show', compact('unidadFormativa'));
    }

    public function edit(UnidadFormativa $unidadFormativa)
    {
        $modulos = Modulo::all();
        $profesores = Profesor::all();
        return view('unidad-formativas.edit', compact('unidadFormativa', 'modulos', 'profesores'));
    }

    public function update(Request $request, UnidadFormativa $unidadFormativa)
    {
        $request->validate([
            'nombre' => 'required',
            'modulo_id' => 'required',
            'profesor_id' => 'required',
        ]);

        $unidadFormativa->update($request->all());
        return redirect()->route('unidad-formativas.index');
    }

    public function destroy(UnidadFormativa $unidadFormativa)
    {
        $unidadFormativa->delete();
        return redirect()->route('unidad-formativas.index');
    }
}

