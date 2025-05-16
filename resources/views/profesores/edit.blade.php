@extends('layouts.app')

@section('content')
<h1>Editar Profesor</h1>
<form action="{{ route('profesores.update', $profesor) }}" method="POST">
    @csrf @method('PUT')
    @include('profesores.form')
    <button type="submit">Actualizar</button>
</form>
@endsection
