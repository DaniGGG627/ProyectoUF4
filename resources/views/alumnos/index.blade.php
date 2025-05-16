@extends('layouts.app')

@section('content')
    <h1>Lista de Alumnos</h1>
    <a href="{{ route('alumnos.create') }}" class="btn">Nuevo Alumno</a>

    <table>
        <tr>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->email }}</td>
                <td>
                    <a href="{{ route('alumnos.edit', $alumno) }}">Editar</a> |
                    <a href="{{ route('alumnos.show', $alumno) }}">Ver</a> |
                    <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
