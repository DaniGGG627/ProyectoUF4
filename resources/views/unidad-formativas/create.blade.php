@extends('layouts.app')

@section('content')
<h1>Crear Unidad Formativa</h1>
<form action="{{ route('unidad-formativas.store') }}" method="POST">
    @csrf
    @include('unidad-formativas.form')
    <button type="submit">Guardar</button>
</form>
@endsection
