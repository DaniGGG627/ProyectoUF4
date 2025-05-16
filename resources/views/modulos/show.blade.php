@extends('layouts.app')

@section('content')
    <h1>Detalle del Módulo</h1>
    <p><strong>Nombre:</strong> {{ $modulo->nombre }}</p>
    <p><strong>Descripción:</strong> {{ $modulo->descripcion }}</p>
    <a href="{{ route('modulos.index') }}">Volver</a>
@endsection
