@extends('layouts.app')

@section('content')
    <h1>Lista de Profesores</h1>
    <a href="{{ route('profesores.create') }}" class="btn">Nuevo Profesor</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        @foreach($profesores as $profesor)
            <tr>
                <td>{{ $profesor->nombre }}</td>
                <td>{{ $profesor->email }}</td>
                <td>
                    <a href="{{ route('profesores.edit', $profesor) }}">Editar</a> |
                    <a href="{{ route('profesores.show', $profesor) }}">Ver</a> |
                    <form action="{{ route('profesores.destroy', $profesor) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
