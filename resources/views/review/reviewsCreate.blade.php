<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nueva Review</title>
    <style>
        .error-message {
            color: red;
        }
    </style>
</head>
<body>
    <a href="{{ route('reviews.index') }}">Listado de Reviews</a>
    <h1>Nueva Review</h1>
    
    <form action="{{ route('reviews.store') }}" method="POST">
        @csrf
        <div>
            <label for="Nombre_usuario">Nombre de Usuario</label>
            <input type="text" name="Nombre_usuario" value="{{ old('Nombre_usuario') }}">
            @error('Nombre_usuario')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="Nombre_Juego">Nombre del Juego</label>
            <input type="text" name="Nombre_Juego" value="{{ old('Nombre_Juego') }}">
            @error('Nombre_Juego')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="Puntuacion">Puntuación</label>
            <input type="number" name="Puntuacion" value="{{ old('Puntuacion') }}">
            @error('Puntuacion')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="Comentario">Comentario</label>
            <textarea name="Comentario" cols="30" rows="10">{{ old('Comentario') }}</textarea>
            @error('Comentario')
                <div class='error-message'>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <input type="submit" value="ENVIAR">
        </div>
    </form>
</body>
</html>
