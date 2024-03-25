<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda-Juegos-Frikis</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white font-sans">

    <div class="min-h-screen flex flex-col justify-center items-center">
        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <h1 class="text-5xl font-bold mb-8">Bienvenido a Tienda-Juegos-Frikis</h1>
        <p class="text-lg mb-12">Un lugar donde todos nos encontramos agusto y felices.</p>
        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                <a href="{{ route('juegos.index') }}" class="scale-100 p-6 bg-gray-900 text-gray-900 rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <div class="h-12 w-12 bg-gray-900 rounded-full flex items-center justify-center">
                                <span class="text-white text-2xl">🎮</span>
                            </div>
                        </div>
                
                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Videojuegos</h2>
                
                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Explora nuestro catálogo de videojuegos y sumérgete en un mundo de diversión y entretenimiento. Descubre una amplia variedad de títulos que satisfacen todos los gustos y preferencias.
                        </p>
                    </div>
                
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>
                <a href="{{ route('reviews.index') }}" class="scale-100 p-6 bg-gray-900 text-gray-900 rounded-lg shadow-2xl shadow-gray-500/20 flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <div class="h-16 w-16 bg-red-50 flex items-center justify-center rounded-full">
                            <!-- Icono de cuaderno -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7 stroke-red-500">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4v16c0 1.1.9 2 2 2h14a2 2 0 002-2V4a2 2 0 00-2-2H5a2 2 0 00-2 2zm0 0h16M8 4v4m0 0l4-4m-4 4l4 4m7-1H8m7 0v4m0 0l4-4m-4 4l4 4m-11-2h4" />
                            </svg>
                        </div>

                        <h2 class="mt-6 text-xl font-semibold text-gray-900">Ver Reviews</h2>

                        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                            Explora las opiniones y calificaciones de nuestros usuarios sobre nuestros productos y servicios. Descubre qué dicen nuestros clientes y toma decisiones informadas.
                        </p>
                    </div>

                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="self-center shrink-0 stroke-red-500 w-6 h-6 mx-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</body>
</html>

