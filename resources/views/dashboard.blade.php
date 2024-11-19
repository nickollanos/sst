<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <nav class="bg-blue-600 p-4 flex items-center justify-between text-white">
        <div class="flex space-x-4">
            <!-- Select Año -->
            <select class="bg-blue-500 text-white p-2 rounded-md" name="ano">
                <option value="">Año</option>
                @foreach($datos->unique('ano') as $dato)
                    <option value="{{ $dato->ano }}" @if(old('ano') == $dato->ano ) selected @endif>{{ $dato->ano }}</option>
                @endforeach
            </select>

            <!-- Select Mes -->
            <select class="bg-blue-500 text-white p-2 rounded-md" name="mes">
                <option value="">Mes</option>
                <option value="enero">Enero</option>
                <option value="febrero">Febrero</option>
                <option value="marzo">Marzo</option>
                <option value="abril">Abril</option>
                <option value="mayo">Mayo</option>
                <option value="junio">Junio</option>
                <option value="julio">Julio</option>
                <option value="agosto">Agosto</option>
                <option value="septiembre">Septiembre</option>
                <option value="octubre">Octubre</option>
                <option value="noviembre">Noviembre</option>
                <option value="diciembre">Diciembre</option>
            </select>

        </div>

        <!-- Botones -->
        <div class="flex space-x-4">
            <button class="bg-red-500 p-2 rounded-md hover:bg-red-600">Eliminar</button>
            <button class="bg-yellow-500 p-2 rounded-md hover:bg-yellow-600">Editar</button>
            <button class="bg-green-500 p-2 rounded-md hover:bg-green-600">Añadir</button>
        </div>

        <!-- Tarjeta derecha -->
        @foreach ($fechas as $fecha)
        <div class="flex items-center space-x-4">
            <button class="bg-gray-800 text-white p-2 rounded-md hover:bg-gray-900">Actualizar</button>
            <div class="bg-white p-2 rounded-md flex items-center space-x-2">
                <img src="{{ asset('images/date.svg') }}" alt="Imagen" class="w-10 h-10 rounded-md">
                <strong class="text-gray-900">{{ $fecha->dias_sin_accidentes }}</strong>
                <h1 class="text-gray-700">Dias sin accidente</h1>
            </div>
        </div>
        @endforeach
    </nav>

    <!-- Main Content -->
    <main class="p-6 space-y-8">
    @foreach($datos as $dato)
        <!-- Primer Nivel: 3 Tarjetas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <!-- Contenedor para las mini tarjetas -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

                    <!-- Mini tarjeta con gráfica de dona -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md flex flex-col items-center justify-center">
                        <!-- Gráfico de dona con SVG -->
                        <svg class="w-28 h-28 transform rotate-90" viewBox="0 0 36 36">
                            <!-- Fondo del círculo (gris claro) -->
                            <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#e0e0e0" stroke-width="4"/>

                            <!-- Porcentaje Azul (60% - 216 grados) -->
                            <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#1E40AF" stroke-width="4"
                                stroke-dasharray="216 144" stroke-linecap="round"/>

                            <!-- Porcentaje Naranja (40% - 144 grados) -->
                            <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#F59E0B" stroke-width="4"
                                    stroke-dasharray="144 216" stroke-dashoffset="216" stroke-linecap="round" pathLength="360"/>
                        </svg>

                        <h1 class="text-center mt-2">trabajadores</h1>
                        <span class="text-lg font-bold">21</span>
                    </div>



                    <!-- Mini tarjeta con imágenes apiladas -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md space-y-4">
                        <!-- Primera imagen -->
                        <div class="flex flex-col items-center">
                            <img src="https://via.placeholder.com/100" alt="Imagen 1" class="w-24 h-24 rounded-full">
                            <h1 class="text-center mt-2">Imagen 1</h1>
                        </div>

                        <!-- Segunda imagen -->
                        <div class="flex flex-col items-center">
                            <img src="https://via.placeholder.com/100" alt="Imagen 2" class="w-24 h-24 rounded-full">
                            <h1 class="text-center mt-2">Imagen 2</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <h2 class="text-xl font-semibold">Tarjeta 2</h2>
                <p>Contenido de la tarjeta 2.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <h2 class="text-xl font-semibold">Tarjeta 3</h2>
                <p>Contenido de la tarjeta 3.</p>
            </div>
        </div>

        <!-- Segundo Nivel: 3 Tarjetas (la derecha con dos subdivididas) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <h2 class="text-xl font-semibold">Tarjeta 4</h2>
                <p>Contenido de la tarjeta 4.</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <h2 class="text-xl font-semibold">Tarjeta 5</h2>
                <p>Contenido de la tarjeta 5.</p>
            </div>
            <div class="grid grid-cols-2 gap-6">
                <div class="bg-white p-4 rounded-lg shadow-md h-full">
                    <h2 class="text-xl font-semibold">Tarjeta 6a</h2>
                    <p>Contenido de la tarjeta 6a.</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md h-full">
                    <h2 class="text-xl font-semibold">Tarjeta 6b</h2>
                    <p>Contenido de la tarjeta 6b.</p>
                </div>
            </div>
        </div>

        <!-- Tercer Nivel: Tarjeta centrada -->
        <div class="flex justify-center">
            <div class="bg-white p-4 rounded-lg shadow-md w-full max-w-3xl h-full">
                <h2 class="text-xl font-semibold text-center">Tarjeta 7 - Centrada</h2>
                <p class="text-center">Contenido de la tarjeta centrada.</p>
            </div>
        </div>
    @endforeach
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 p-4 text-white text-center">
        <p>&copy; 2024 Reporte de Seguridad y Salud en el Trabajo. Todos los derechos reservados.</p>
    </footer>

</body>
</html>
