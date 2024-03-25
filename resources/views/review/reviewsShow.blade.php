<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de la review</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

    <div class="min-h-screen flex flex-col justify-center items-center">
        <a href="{{ route('reviews.index') }}" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">Volver al Listado de Reviews</a>
        <a href="/" class="text-blue-500 hover:text-blue-700 mb-4 inline-block">Dashboard</a>
        <h1 class="text-3xl font-bold mb-8">Detalle de la review</h1>

        <body class="bg-gray-900 text-white font-sans">
            <ul>
                <li class="mb-4">Nombre de Usuario: <span class="font-semibold">{{ $review->Nombre_usuario }}</span></li>
                <li class="mb-4">Nombre del Juego: <span class="font-semibold">{{ $review->Nombre_Juego }}</span></li>
                <li class="mb-4">Puntuación: <span class="font-semibold">{{ $review->Puntuacion }}</span></li>
                <li class="mb-4">Comentario: <span class="font-semibold">{{ $review->Comentario }}</span></li>
                <li>Fecha de Creación: <span class="font-semibold">{{ $review->created_at }}</span></li>
            </ul>
        </div>
    </div>
</body>
</html>
