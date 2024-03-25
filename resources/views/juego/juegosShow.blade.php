<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Juego</title>
    <!-- Agrega el enlace a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="nav">
        <a href="/" class="text-blue-400 hover:text-blue-600">Dashboard</a>
        <a href="/juegos" class="ml-4 text-blue-400 hover:text-blue-600">Volver a la lista de juegos</a>
    </div>
    <h1 class="text-3xl font-bold mb-4">Detalles del Juego</h1>
    <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
        <ul class="divide-y divide-gray-700">
            <li class="py-2">Nombre del Juego: {{$juego->Nombre_Juego}}</li>
            <li class="py-2">Desarrollador: {{$juego->Desarrollador}}</li>
            <li class="py-2">Categoría: {{$juego->Categoria}}</li>
            <li class="py-2">Descripción: {{$juego->Descripcion}}</li>
            <li class="py-2">Precio: {{$juego->Precio}}</li>
            <li class="py-2">Fecha de Lanzamiento: {{$juego->Fecha_Lanzamiento}}</li>
            <li class="py-2">Requisitos: {{$juego->Requisitos}}</li>
        </ul>
    </div>
</body>
</html>
