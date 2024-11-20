<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
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
                <option value="{{ $dato->ano }}" @if(old('ano')==$dato->ano ) selected @endif>{{ $dato->ano }}</option>
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
                <h1 class="text-gray-700">Dias sin accidentes</h1>
            </div>
        </div>
        @endforeach
    </nav>

    <!-- Main Content -->
    <main class="p-6 space-y-8">
        @foreach($datos as $dato)
        @php
        $porcentajeAdministrativos = ($dato->trabajadores > 0) ? number_format(($dato->administrativos / $dato->trabajadores) * 100, 0) : "0";
        $porcentajeOperativos = ($dato->trabajadores > 0) ? number_format(($dato->operativos / $dato->trabajadores) * 100, 0) : "0";
        $gradosAdministrativos = number_format(($porcentajeAdministrativos / 100 ) * 360, 0);
        $gradosOperativos = number_format(($porcentajeOperativos / 100 ) * 360, 0);
        $porcentajeAccidentesAdministrativo = number_format(($dato->accidentes_administrativos / $dato->accidentes) * 100, 0);
        $porcentajeAccidentesOperativo = number_format(($dato->accidentes_operativos / $dato->accidentes) * 100, 0);
        $porcentajeAccidentesOtro = number_format(($dato->accidentes_otros / $dato->accidentes) * 100, 0);
        $porcentajeIncidentesAdministrativo = number_format(($dato->incidentes_administrativos / $dato->incidentes) * 100, 0);
        $porcentajeIncidentesOperativo = number_format(($dato->incidentes_operativos / $dato->incidentes) * 100, 0);
        $porcentajeIncidentesOtro = number_format(($dato->incidentes_otros / $dato->incidentes) * 100, 0);
        $porcentajeCapacitacion = number_format(($dato->capacitaciones_ejecutadas / $dato->capacitaciones_programadas) * 100, 0);
        $porcentajeSimulacro = number_format(($dato->simulacros_ejecutados / $dato->simulacros_programados) * 100, 0);
        $porcentajeInspeccion = number_format(($dato->inspecciones_ejecutadas / $dato->inspecciones_programadas) * 100, 0);
        $porcentajeSST = number_format(($dato->PASST_ejecutados / $dato->PASST_programados) * 100, 0);
        @endphp
        <!-- Primer Nivel: 3 Tarjetas -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Tarjeta 1 -->
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <!-- Título centrado para las mini tarjetas -->
                <div class="text-center">
                    <strong>COLABORADORES</strong>
                </div>
                <!-- Contenedor para las mini tarjetas -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-4">

                    <!-- Mini tarjeta con gráfica de dona -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md flex flex-col items-center justify-center">
                        <!-- Gráfico de dona con SVG -->
                        <!-- Gráfico de dona con SVG -->
                        <svg class="w-28 h-28 transform rotate-0" viewBox="0 0 36 36">
                            <!-- Fondo del círculo (gris claro) -->
                            <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#1E40AF" stroke-width="4" />

                            <!-- Porcentaje Azul (60% - 216 grados) -->
                            <!-- <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#1E40AF" stroke-width="4"
                                stroke-dasharray="{{ $gradosAdministrativos }} {{ $gradosOperativos }}" stroke-linecap="round"/> -->

                            <!-- Porcentaje Naranja (40% - 144 grados) -->
                            <circle cx="18" cy="18" r="15.915" fill="transparent" stroke="#F59E0B" stroke-width="4"
                                stroke-dasharray="{{ $gradosOperativos }} {{ $gradosAdministrativos }}" stroke-linecap="round" pathLength="360" />
                        </svg>

                        <h1 class="text-center mt-2">TRABAJADORES</h1>
                        <span class="text-lg font-bold">{{ $dato->trabajadores }}</span>
                    </div>

                    <!-- Mini tarjeta con imágenes apiladas -->
                    <div class="bg-gray-100 p-4 rounded-lg shadow-md space-y-4">
                        <!-- Primera imagen -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/icon-admin.svg') }}" alt="administrativos" class="w-24 h-24 rounded-full">
                            <h1 class="text-lg font-semibold text-center">{{ $dato->administrativos }}</h1>
                            <h1 class="text-center mt-2">ADMINISTRATIVOS</h1>
                            <h1 class="text-center mt-2">{{ $porcentajeAdministrativos }}%</h1>
                        </div>

                        <!-- Segunda imagen -->
                        <div class="flex flex-col items-center">
                            <img src="{{ asset('images/icon-worker.svg') }}" alt="operativos" class="w-24 h-24 rounded-full">
                            <h1 class="text-lg font-semibold text-center">{{ $dato->operativos }}</h1>
                            <h1 class="text-center mt-2">OPERATIVOS</h1>
                            <h1 class="text-center mt-2">{{ $porcentajeOperativos }}%</h1>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <div class="text-center">
                    <strong>ACCIDENTES</strong>
                </div>

                <!-- Contenedor Grid -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mt-4">

                    <!-- Tarjeta de imagen a la izquierda y texto a la derecha -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md col-span-1 flex w-3/4 h-40 mx-auto justify-center items-center">

                        <!-- Tarjeta de imagen a la izquierda -->
                        <div class="w-1/2 flex justify-center items-center">
                            <img src="{{ asset('images/injure.svg') }}" alt="injure" class="w-32 h-32 object-cover rounded-full">
                        </div>

                        <!-- Tarjeta de texto a la derecha -->
                        <div class="w-1/2 flex flex-col justify-center items-center">
                            <h1 class="text-lg font-semibold text-center">{{ $dato->accidentes }}</h1>
                            <h1 class="text-center mt-2">ACCIDENTES</h1>
                        </div>

                    </div>




                    <!-- Tres tarjetas horizontales a la derecha -->
                    <div class="grid grid-cols-1 gap-4 md:col-span-3">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h1 class="text-lg font-semibold">OTROS {{ $porcentajeAccidentesOtro }}%</h1>
                            <div class="w-full bg-gray-300 h-2 mb-2 rounded-full">
                                <div class="bg-red-500 h-2 rounded-full" style="width: {{ $porcentajeAccidentesOtro }}%;"></div>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h1 class="text-lg font-semibold">ADMINISTRATIVOS {{ $porcentajeAccidentesAdministrativo }}%</h1>
                            <!-- Barra de progreso -->
                            <div class="w-full bg-gray-300 h-2 mb-2 rounded-full">
                                <div class="bg-[#1E40AF] h-2 rounded-full" style="width: {{ $porcentajeAccidentesAdministrativo }}%;"></div>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h1 class="text-lg font-semibold">OPERATIVOS {{ $porcentajeAccidentesOperativo }}%</h1>
                            <div class="w-full bg-gray-300 h-2 mb-2 rounded-full">
                                <div class="bg-[#F59E0B] h-2 rounded-full" style="width: {{ $porcentajeAccidentesOperativo }}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <div class="text-center">
                    <strong>INCIDENTES</strong>
                </div>

                <!-- Contenedor Grid -->
                <div class="grid grid-cols-1 md:grid-cols-1 gap-4 mt-4">

                    <!-- Tarjeta de imagen a la izquierda y texto a la derecha -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md col-span-1 flex w-3/4 h-40 mx-auto justify-center items-center">

                        <!-- Tarjeta de imagen a la izquierda -->
                        <div class="w-1/2 flex justify-center items-center">
                            <img src="{{ asset('images/incident.svg') }}" alt="incident" class="w-32 h-32 object-cover rounded-full">
                        </div>

                        <!-- Tarjeta de texto a la derecha -->
                        <div class="w-1/2 flex flex-col justify-center items-center">
                            <h1 class="text-lg font-semibold text-center">{{ $dato->incidentes }}</h1>
                            <h1 class="text-center mt-2">INCIDENTES</h1>
                        </div>

                    </div>




                    <!-- Tres tarjetas horizontales a la derecha -->
                    <div class="grid grid-cols-1 gap-4 md:col-span-3">
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h1 class="text-lg font-semibold">OTROS {{ $porcentajeIncidentesOtro }}%</h1>
                            <div class="w-full bg-gray-300 h-2 mb-2 rounded-full">
                                <div class="bg-red-500 h-2 rounded-full" style="width: {{ $porcentajeIncidentesOtro }}%;"></div>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h1 class="text-lg font-semibold">ADMINISTRATIVOS {{ $porcentajeIncidentesAdministrativo }}%</h1>
                            <!-- Barra de progreso -->
                            <div class="w-full bg-gray-300 h-2 mb-2 rounded-full">
                                <div class="bg-[#1E40AF] h-2 rounded-full" style="width: {{ $porcentajeIncidentesAdministrativo }}%;"></div>
                            </div>
                        </div>

                        <div class="bg-gray-100 p-4 rounded-lg shadow-md">
                            <h1 class="text-lg font-semibold">OPERATIVOS {{ $porcentajeIncidentesOperativo }}%</h1>
                            <div class="w-full bg-gray-300 h-2 mb-2 rounded-full">
                                <div class="bg-[#F59E0B] h-2 rounded-full" style="width: {{ $porcentajeIncidentesOperativo }}%;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Segundo Nivel: 3 Tarjetas (la derecha con dos subdivididas) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Tarjeta 1 -->
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <div class="text-center">
                    <strong>CAPACITACIONES Y ENTRENAMIENTO</strong>
                </div>

                <!-- Contenedor grid para las tres tarjetas, ahora en columnas (verticales) -->
                <div class="grid grid-cols-1 sm:grid-cols-1 lg:grid-cols-1 gap-4">

                    <!-- Tarjeta 1.1 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md flex items-center space-x-4">
                        <!-- Imagen -->
                        <img src="{{ asset('images/inspection.svg') }}" alt="inspection" class="w-20 h-28 object-cover rounded-md">

                        <!-- Título -->
                        <h1 class="text-lg font-semibold">{{ $dato->inspecciones_programadas }}</h1>

                        <!-- Barra de progreso -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md w-full">
                            <h1 class="text-lg font-semibold">INSPECCIONES {{ $porcentajeCapacitacion }}%</h1>
                            <div class="w-full bg-gray-500 h-2 mb-2 rounded-full">
                                <div class="bg-[#FFFF00] h-2 rounded-full" style="width: {{ $porcentajeCapacitacion }}%;"></div>
                            </div>
                        </div>
                    </div>


                    <!-- Tarjeta 1.2 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md flex items-center space-x-4">
                        <!-- Imagen -->
                        <img src="{{ asset('images/emergency.svg') }}" alt="emergency" class="w-20 h-28 object-cover rounded-md">

                        <!-- Título -->
                        <h1 class="text-lg font-semibold">{{ $dato->simulacros_programados }}</h1>

                        <!-- Barra de progreso -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md w-full">
                            <h1 class="text-lg font-semibold">SIMULACROS {{ $porcentajeSimulacro }}%</h1>
                            <div class="w-full bg-gray-500 h-2 mb-2 rounded-full">
                                <div class="bg-[#E29513] h-2 rounded-full" style="width: {{ $porcentajeSimulacro }}%;"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Tarjeta 1.3 -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md flex items-center space-x-4">
                        <!-- Imagen -->
                        <img src="{{ asset('images/training.svg') }}" alt="training" class="w-20 h-28 object-cover rounded-md">

                        <!-- Título -->
                        <h1 class="text-lg font-semibold">{{ $dato->capacitaciones_programadas }}</h1>

                        <!-- Barra de progreso -->
                        <div class="bg-gray-100 p-4 rounded-lg shadow-md w-full">
                            <h1 class="text-lg font-semibold">CAPACITACIONES {{ $porcentajeInspeccion }}%</h1>
                            <div class="w-full bg-gray-500 h-2 mb-2 rounded-full">
                                <div class="bg-[#1E40AF] h-2 rounded-full" style="width: {{ $porcentajeInspeccion }}%;"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <h2 class="text-xl font-semibold">Tarjeta 5</h2>
                <p>Contenido de la tarjeta 5.</p>
                <div role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="--value:67">

                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="grid grid-cols-2 gap-6">

                <!-- Tarjeta covid -->
                <div class="bg-white p-4 rounded-lg shadow-md h-full">
                    <div class="text-center">
                        <strong>REPORTES COVID</strong>
                    </div>

                    <!-- Contenedor para imagen y texto -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md">
                        <div class="flex flex-col items-center">
                            <!-- Imagen centrada -->
                            <img src="{{ asset('images/lung.svg') }}" alt="lung" class="w-32 h-48 object-cover rounded-md mb-4 mt-20">

                            <!-- Texto debajo de la imagen -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="text-center">
                                    <strong>CASOS POSITIVOS</strong>
                                </div>
                                <strong class="text-xl text-gray-900">14</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tarjeta programa anual-->
                <div class="bg-white p-4 rounded-lg shadow-md h-full">
                    <div class="text-center">
                        <strong>REPORTES COVID</strong>
                    </div>

                    <!-- Contenedor para imagen y texto -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md">
                        <div class="flex flex-col items-center">
                            <!-- Gráfica de media luna -->
                            <!-- <div role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="--value:67">

                            </div> -->

                            <!-- Texto debajo de la imagen -->
                            <div class="flex flex-col items-center space-y-2">
                                <div class="text-center">
                                    <strong>CASOS POSITIVOS</strong>
                                </div>
                                <strong class="text-xl text-gray-900">{{ $porcentajeSST }}%</strong>
                            </div>
                        </div>
                    </div>
                </div>
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
