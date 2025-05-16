<label>Nombre</label>
<input type="text" name="nombre" value="{{ old('nombre', $alumno->nombre ?? '') }}" required>

<label>Email</label>
<input type="email" name="email" value="{{ old('email', $alumno->email ?? '') }}" required>
