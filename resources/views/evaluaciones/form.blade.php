<label>Alumno</label>
<select name="alumno_id" required>
    @foreach($alumnos as $alumno)
        <option value="{{ $alumno->id }}" {{ (old('alumno_id', $evaluacion->alumno_id ?? '') == $alumno->id) ? 'selected' : '' }}>
            {{ $alumno->nombre }}
        </option>
    @endforeach
</select>

<label>Unidad Formativa</label>
<select name="unidad_formativa_id" required>
    @foreach($ufs as $uf)
        <option value="{{ $uf->id }}" {{ (old('unidad_formativa_id', $evaluacion->unidad_formativa_id ?? '') == $uf->id) ? 'selected' : '' }}>
            {{ $uf->nombre }}
        </option>
    @endforeach
</select>

<label>Nota</label>
<input type="number" name="nota" value="{{ old('nota', $evaluacion->nota ?? '') }}" min="0" max="10" step="0.1" required>
