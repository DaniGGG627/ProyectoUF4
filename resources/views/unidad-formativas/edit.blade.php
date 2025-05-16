@extends('layouts.app')

@section('content')
<h1>Editar Unidad Formativa</h1>
<form action="{{ route('unidad-formativas.update', $unidadFormativa) }}" method="POST">
    @csrf @method('PUT')
    @include('unidad-formativas.form')
    <button type="submit">Actualizar</button>
</form>
@endsection
