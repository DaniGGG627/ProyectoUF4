@extends('layouts.app')

@section('content')
    <h1>Nuevo Módulo</h1>
    <form action="{{ route('modulos.store') }}" method="POST">
        @include('modulos.form')
    </form>
@endsection
