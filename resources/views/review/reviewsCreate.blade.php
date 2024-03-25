<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Review</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body class="bg-gray-900 text-white font-sans">

    <a href="{{ route('reviews.index') }}" class="text-blue-500 hover:text-blue-700">Listado de Reviews</a>
    <a href="/" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">Dashboard</a>
    <h1 class="text-3xl font-bold mb-4">Nueva Review</h1>
    
    <form action="{{ route('reviews.store') }}" method="POST" class="max-w-md">
        @csrf
        <div class="mb-4">
            <label for="Nombre_usuario" class="block">Nombre de Usuario</label>
            <input type="text" name="Nombre_usuario" value="{{ old('Nombre_usuario') }}" class="w-full bg-gray-800 text-white border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            @error('Nombre_usuario')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Nombre_Juego" class="block">Nombre del Juego</label>
            <input type="text" name="Nombre_Juego" value="{{ old('Nombre_Juego') }}" class="w-full bg-gray-800 text-white border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            @error('Nombre_Juego')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Puntuacion" class="block">Puntuación</label>
            <input type="number" name="Puntuacion" value="{{ old('Puntuacion') }}" class="w-full bg-gray-800 text-white border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">
            @error('Puntuacion')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Comentario" class="block">Comentario</label>
            <textarea name="Comentario" cols="30" rows="10" class="w-full bg-gray-800 text-white border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50">{{ old('Comentario') }}</textarea>
            @error('Comentario')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="submit" value="ENVIAR" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </div>
    </form>
</body>
</html>
