<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Juego</title>
    <!-- Agrega el enlace a Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="nav">
        <a href="/juegos" class="text-blue-400 hover:text-blue-600">Volver a la lista de juegos</a>
    </div>
    <form action="{{ route('juegos.store') }}" method="POST" class="max-w-lg mx-auto mt-8 p-8 bg-gray-800 rounded-lg shadow-lg">
        @csrf
        <div class="mb-4">
            <label for="Nombre_Juego" class="block text-sm font-medium mb-1">Nombre del Juego:</label>
            <input type="text" name="Nombre_Juego" id="Nombre_Juego" value="{{ old('Nombre_Juego') }}" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">
            @error('Nombre_Juego')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <label for="Desarrollador" class="block text-sm font-medium mb-1">Desarrollador:</label>
            <input type="text" name="Desarrollador" id="Desarrollador" value="{{ old('Desarrollador') }}" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">
            @error('Desarrollador')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <h3 class="text-sm font-medium mb-1">Categoría:</h3>
            <input type="text" name="Categoria" id="Categoria" value="{{ old('Categoria') }}" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">
            @error('Categoria')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <h3 class="text-sm font-medium mb-1">Descripción:</h3>
            <textarea id="Descripcion" name="Descripcion" rows="5" cols="33" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">{{ old('Descripcion') }}</textarea>
            @error('Descripcion')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <h3 class="text-sm font-medium mb-1">Precio:</h3>
            <input type="text" name="Precio" id="Precio" value="{{ old('Precio') }}" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">
            @error('Precio')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <h3 class="text-sm font-medium mb-1">Fecha de Lanzamiento:</h3>
            <input type="date" name="Fecha_Lanzamiento" id="Fecha_Lanzamiento" value="{{ old('Fecha_Lanzamiento') }}" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">
            @error('Fecha_Lanzamiento')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <h3 class="text-sm font-medium mb-1">Requisitos:</h3>
            <textarea id="Requisitos" name="Requisitos" rows="5" cols="33" class="w-full bg-gray-700 border border-gray-600 rounded-md py-2 px-3 focus:outline-none focus:ring focus:border-blue-400">{{ old('Requisitos') }}</textarea>
            @error('Requisitos')
                <div class='error-message text-red-500 mt-1'>{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-4">
            <button type="submit" id="button" name="button" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md focus:outline-none focus:ring focus:border-blue-400">Enviar formulario</button>
        </div>
    </form>
</body>
</html>