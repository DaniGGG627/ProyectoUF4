@extends('layouts.app')

@section('content')
<h1>Detalle del Alumno</h1>

<p><strong>Nombre:</strong> {{ $alumno->nombre }}</p>
<p><strong>Email:</strong> {{ $alumno->email }}</p>

<a href="{{ route('alumnos.index') }}">Volver al listado</a>
@endsection
