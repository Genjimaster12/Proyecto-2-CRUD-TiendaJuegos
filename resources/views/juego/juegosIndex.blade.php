<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Juegos</title>
    <!-- Agrega el enlace a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <a href="/" class="text-blue-400 hover:text-blue-600">Dashboard</a>
    <a href="{{ route('juegos.create') }}" class="text-blue-400 hover:text-blue-600">Nuevo juego</a>
    <h1 class="text-3xl font-bold my-4">Lista de Juegos</h1>
    <table class="w-full bg-gray-800 border border-gray-700 divide-y divide-gray-700">
        <thead>
            <tr>
                <th class="px-4 py-2">Nombre del Juego</th>
                <th class="px-4 py-2">Desarrollador</th>
                <th class="px-4 py-2">Categoría</th>
                <th class="px-4 py-2">Precio</th>
                <th class="px-4 py-2">Fecha de Lanzamiento</th>
                <th class="px-4 py-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($juegos as $juego)
            <tr>
                <td class="px-4 py-2">{{ $juego->Nombre_Juego }}</td>
                <td class="px-4 py-2">{{ $juego->Desarrollador }}</td>
                <td class="px-4 py-2">{{ $juego->Categoria }}</td>
                <td class="px-4 py-2">{{ $juego->Precio }}</td>
                <td class="px-4 py-2">{{ $juego->Fecha_Lanzamiento }}</td>
                <td class="px-4 py-2">
                    <a href="{{ route('juegos.show', $juego->id) }}" class="text-blue-400 hover:text-blue-600">Detalles</a>
                    <a href="{{ route('juegos.edit', $juego->id) }}" class="ml-2 text-blue-400 hover:text-blue-600">Editar</a>
                    <form action="{{ route('juegos.destroy', $juego->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Eliminar" class="text-red-400 hover:text-red-600 ml-2 cursor-pointer">
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
