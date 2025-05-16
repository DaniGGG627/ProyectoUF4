<label>Nombre</label>
<input type="text" name="nombre" value="{{ old('nombre', $unidadFormativa->nombre ?? '') }}" required>

<label>Módulo</label>
<select name="modulo_id" required>
    @foreach($modulos as $modulo)
        <option value="{{ $modulo->id }}" {{ (old('modulo_id', $unidadFormativa->modulo_id ?? '') == $modulo->id) ? 'selected' : '' }}>
            {{ $modulo->nombre }}
        </option>
    @endforeach
</select>

<label>Profesor</label>
<select name="profesor_id" required>
    @foreach($profesores as $profesor)
        <option value="{{ $profesor->id }}" {{ (old('profesor_id', $unidadFormativa->profesor_id ?? '') == $profesor->id) ? 'selected' : '' }}>
            {{ $profesor->nombre }}
        </option>
    @endforeach
</select>
