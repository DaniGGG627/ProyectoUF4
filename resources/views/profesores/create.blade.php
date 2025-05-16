@extends('layouts.app')

@section('content')
<h1>Crear Profesor</h1>
<form action="{{ route('profesores.store') }}" method="POST">
    @csrf
    @include('profesores.form')
    <button type="submit">Guardar</button>
</form>
@endsection
