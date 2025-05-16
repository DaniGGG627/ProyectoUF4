@extends('layouts.app')

@section('content')
    <h1>Lista de Unidades Formativas</h1>
    <a href="{{ route('unidad-formativas.create') }}" class="btn">Nueva Unidad Formativa</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Módulo</th>
            <th>Profesor</th>
            <th>Acciones</th>
        </tr>
        @foreach($ufs as $uf)
            <tr>
                <td>{{ $uf->nombre }}</td>
                <td>{{ $uf->modulo->nombre ?? 'N/A' }}</td>
                <td>{{ $uf->profesor->nombre ?? 'N/A' }}</td>
                <td>
                    <a href="{{ route('unidad-formativas.edit', $uf) }}">Editar</a> |
                    <a href="{{ route('unidad-formativas.show', $uf) }}">Ver</a> |
                    <form action="{{ route('unidad-formativas.destroy', $uf) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
