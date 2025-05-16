@extends('layouts.app')

@section('content')
<h1>Detalle de la Evaluación</h1>

<p><strong>Alumno:</strong> {{ $evaluacion->alumno->nombre }}</p>
<p><strong>Unidad Formativa:</strong> {{ $evaluacion->unidadFormativa->nombre }}</p>
<p><strong>Nota:</strong> {{ $evaluacion->nota }}</p>

<a href="{{ route('evaluaciones.index') }}">Volver al listado</a>
@endsection
