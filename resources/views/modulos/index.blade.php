@extends('layouts.app')

@section('content')
    <h1>Lista de Módulos</h1>
    <a href="{{ route('modulos.create') }}" class="btn">Nuevo Módulo</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
        @foreach($modulos as $modulo)
            <tr>
                <td>{{ $modulo->nombre }}</td>
                <td>{{ $modulo->descripcion }}</td>
                <td>
                    <a href="{{ route('modulos.edit', $modulo) }}">Editar</a> |
                    <a href="{{ route('modulos.show', $modulo) }}">Ver</a> |
                    <form action="{{ route('modulos.destroy', $modulo) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
