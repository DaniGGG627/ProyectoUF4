@extends('layouts.app')

@section('content')
<h1>Detalle de la Unidad Formativa</h1>

<p><strong>Nombre:</strong> {{ $unidadFormativa->nombre }}</p>
<p><strong>Módulo:</strong> {{ $unidadFormativa->modulo->nombre }}</p>
<p><strong>Profesor:</strong> {{ $unidadFormativa->profesor->nombre }}</p>

<a href="{{ route('unidad-formativas.index') }}">Volver al listado</a>
@endsection
