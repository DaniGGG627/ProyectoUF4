<label>Nombre</label>
<input type="text" name="nombre" value="{{ old('nombre', $profesor->nombre ?? '') }}" required>

<label>Email</label>
<input type="email" name="email" value="{{ old('email', $profesor->email ?? '') }}" required>
