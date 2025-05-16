@csrf
<div>
    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ old('nombre', $modulo->nombre ?? '') }}" required>
</div>
<div>
    <label>Descripción:</label><br>
    <textarea name="descripcion">{{ old('descripcion', $modulo->descripcion ?? '') }}</textarea>
</div>
<br>
<button class="btn" type="submit">Guardar</button>
