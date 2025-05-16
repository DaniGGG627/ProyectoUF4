@extends('layouts.app')

@section('content')
    <h1>Lista de Evaluaciones</h1>
    <a href="{{ route('evaluaciones.create') }}" class="btn">Nueva Evaluación</a>

    <table>
        <tr>
            <th>Alumno</th>
            <th>Unidad Formativa</th>
            <th>Nota</th>
            <th>Acciones</th>
        </tr>
        @foreach($evaluaciones as $evaluacion)
            <tr>
                <td>{{ $evaluacion->alumno->nombre }}</td>
                <td>{{ $evaluacion->unidadFormativa->nombre }}</td>
                <td>{{ $evaluacion->nota }}</td>
                <td>
                    <a href="{{ route('evaluaciones.edit', $evaluacion) }}">Editar</a> |
                    <a href="{{ route('evaluaciones.show', $evaluacion) }}">Ver</a> |
                    <form action="{{ route('evaluaciones.destroy', $evaluacion) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('¿Seguro?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
