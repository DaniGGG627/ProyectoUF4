@extends('layouts.app')

@section('content')
<h1>Crear Evaluación</h1>
<form action="{{ route('evaluaciones.store') }}" method="POST">
    @csrf
    @include('evaluaciones.form')
    <button type="submit">Guardar</button>
</form>
@endsection
