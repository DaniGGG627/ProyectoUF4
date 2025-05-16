<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escuela FP</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 0; }
        nav { background: #333; color: white; padding: 10px; }
        nav a { color: white; margin: 0 10px; text-decoration: none; }
        .container { width: 80%; margin: 20px auto; background: white; padding: 20px; border-radius: 8px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ccc; }
        h1 { margin-top: 0; }
        .btn { padding: 8px 12px; background: #28a745; color: white; border: none; border-radius: 5px; text-decoration: none; }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('modulos.index') }}">Módulos</a>
        <a href="{{ route('unidad-formativas.index') }}">UFs</a>
        <a href="{{ route('profesores.index') }}">Profesores</a>
        <a href="{{ route('alumnos.index') }}">Alumnos</a>
        <a href="{{ route('evaluaciones.index') }}">Evaluaciones</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
