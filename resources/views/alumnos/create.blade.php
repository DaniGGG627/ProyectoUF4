@extends('layouts.app')

@section('content')
<h1>Crear Alumno</h1>
<form action="{{ route('alumnos.store') }}" method="POST">
    @csrf
    @include('alumnos.form')
    <button type="submit">Guardar</button>
</form>
@endsection
