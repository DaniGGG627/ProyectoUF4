@extends('layouts.app')

@section('content')
<h1>Detalle del Profesor</h1>

<p><strong>Nombre:</strong> {{ $profesor->nombre }}</p>
<p><strong>Email:</strong> {{ $profesor->email }}</p>

<a href="{{ route('profesores.index') }}">Volver al listado</a>
@endsection
