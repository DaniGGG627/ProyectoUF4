@extends('layouts.app')

@section('content')
<h1>Editar Evaluación</h1>

<form action="{{ route('evaluaciones.update', $evaluacion) }}" method="POST">
    @csrf
    @method('PUT')

    @include('evaluaciones.form')

    <button type="submit">Actualizar</button>
</form>

@endsection
