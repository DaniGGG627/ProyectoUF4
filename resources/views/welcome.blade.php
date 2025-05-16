<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión FP Informática</title>
    <style>
        body {
            background-color: #f2f4f8;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 40px;
        }
        .button-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .btn {
            background-color: #3498db;
            color: white;
            padding: 15px 30px;
            font-size: 1.1rem;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s ease;
        }
        .btn:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Panel de Gestión de la Escuela FP Informática</h1>
    <div class="button-container">
        <a href="{{ route('alumnos.index') }}" class="btn">Alumnos</a>
        <a href="{{ route('profesores.index') }}" class="btn">Profesores</a>
        <a href="{{ route('modulos.index') }}" class="btn">Módulos</a>
        <a href="{{ route('unidad-formativas.index') }}" class="btn">Unidades Formativas</a>
        <a href="{{ route('evaluaciones.index') }}" class="btn">Evaluaciones</a>
    </div>
</body>
</html>
