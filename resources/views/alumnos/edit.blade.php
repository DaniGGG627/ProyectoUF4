@extends('layouts.app')

@section('content')
<h1>Editar Alumno</h1>
<form action="{{ route('alumnos.update', $alumno) }}" method="POST">
    @csrf @method('PUT')
    @include('alumnos.form')
    <button type="submit">Actualizar</button>
</form>
@endsection
