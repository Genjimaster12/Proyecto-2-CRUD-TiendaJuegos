<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

    <a href="{{ route('reviews.create') }}" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">Nueva review</a>
    <a href="/" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">Dashboard</a>
    <h1 class="text-3xl font-bold mb-8">Lista de reviews</h1>
    
    <table class="border-collapse border-gray-600">
        <thead>
            <tr class="border-b border-gray-600">
                <th class="p-2">Nombre de usuario</th>
                <th class="p-2">Nombre del juego</th>
                <th class="p-2">Puntuación</th>
                <th class="p-2">Comentario</th>
                <th class="p-2">Fecha de creación</th>
                <th class="p-2">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reviews as $review)     
                <tr class="border-b border-gray-600">
                    <td class="p-2">{{ $review->Nombre_usuario }}</td>
                    <td class="p-2">{{ $review->Nombre_Juego }}</td>
                    <td class="p-2">{{ $review->Puntuacion }}</td>
                    <td class="p-2">{{ $review->Comentario }}</td>
                    <td class="p-2">{{ $review->created_at }}</td>
                    <td class="p-2">
                        <a href="{{ route('reviews.show', $review->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Detalles</a>
                        <a href="{{ route('reviews.edit', $review->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">Editar</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700 bg-blue-300 hover:bg-blue-400 px-3 py-1 rounded">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

