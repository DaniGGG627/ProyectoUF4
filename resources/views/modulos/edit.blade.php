@extends('layouts.app')

@section('content')
    <h1>Editar Módulo</h1>
    <form action="{{ route('modulos.update', $modulo) }}" method="POST">
        @csrf
        @method('PUT')
        @include('modulos.form')
    </form>
@endsection
