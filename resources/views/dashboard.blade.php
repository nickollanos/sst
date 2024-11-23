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
    <nav class="bg-blue-600 p-4 flex flex-col items-center justify-between text-white md:flex-row">
        <!-- Icono de menú hamburguesa -->
        <div class="mb-4 md:mb-0">
            <button id="hamburger-btn" class="text-white p-2">
                <!-- Tres líneas que forman el icono de hamburguesa -->
                <span class="block w-6 h-0.5 bg-white mb-1"></span>
                <span class="block w-6 h-0.5 bg-white mb-1"></span>
                <span class="block w-6 h-0.5 bg-white"></span>
            </button>
        </div>
        <!-- Formulario con select y botón -->
        <form action="{{ route('datos.index') }}" class="flex space-x-4 md:space-x-4 mb-4 md:mb-0 md:ml-0" method="GET" enctype="multipart/form-data">
            @csrf
            @if ( count( $errors->all()) > 0 )
            @foreach ( $errors->all() as $message )
            <li> {{ $message }} </li>
            @endforeach
            @endif
            <!-- Select Año -->
            <select id="ano" class="bg-blue-500 text-white p-2 rounded-md" name="ano"">
                <option value="">Año</option>
                @foreach($datos->unique('ano') as $dato)
                <option value="{{ $dato->ano }}" @if(old('ano')==$dato->ano ) selected @endif>{{ $dato->ano }}</option>
                @endforeach
            </select>
            <!-- Select Mes -->
            <select id="mes" class="bg-blue-500 text-white p-2 rounded-md" name="mes">
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
            <!-- Botón -->
            <button class="bg-gray-500 p-2 rounded-md hover:bg-gray-700" type="submit" id="buscar">Buscar Registro</button>
        </form>
        <!-- Tarjeta derecha visible en pantallas grandes y pequeñas -->


        <div class="flex items-center space-x-4">
            <div class="bg-white p-2 rounded-md flex items-center space-x-2">
                <img src="{{ asset('images/date.svg') }}" alt="Imagen" class="w-10 h-10 rounded-md">
                <strong class="text-gray-900">{{ $dias }}</strong>
                <h1 class="text-gray-700">Días sin accidentes</h1>
            </div>
        </div>

    </nav>


    <!-- Sidebar izquierdo (oculto por defecto) -->
    <div id="sidebar" class="fixed top-0 left-0 w-64 h-full bg-blue-600 text-white transform -translate-x-full transition-transform z-50">
        <div class="p-4">
            <button class="bg-gray-400 text-white text-lg p-2 rounded-md hover:bg-gray-700 w-full" id="close-sidebar-btn">
                Cerrar
            </button>
        </div>
        <ul class="p-4 space-y-4">
            <li>
                <button class="bg-gray-800 text-white p-2 rounded-md hover:bg-gray-500 w-full"> <a href="{{ url('updatefecha') }}"> Actualiza Ultimo Accidente</a></button>
            </li>
            <!-- Aquí pueden ir más enlaces si es necesario -->
        </ul>
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

            <!-- Tarjeta programa anual-->
            <div class="bg-white p-4 rounded-lg shadow-md h-full">

                <div class="text-center">
                    <strong>PROGRAMA ANUAL SST</strong>
                </div>

                <!-- Contenedor para imagen y texto -->
                <div class="bg-gray-200 p-4 rounded-lg shadow-md">
                    <div class="flex flex-col items-center mt-28">
                        <!-- Gráfica de media luna -->
                        <div class="wrapper">
                            <div class="gauge">
                                <div class="slice-colors">
                                    <div class="st slice-item"></div>
                                    <div class="st slice-item"></div>
                                    <div class="st slice-item"></div>
                                    <div class="st slice-item"></div>
                                    <div class="st slice-item"></div>
                                </div>
                                <!-- <div class="needle" style="transform: rotate(180deg);"></div> -->
                                <div class="needle" style="transform: rotate({{ $gradosSST }}deg);"></div>
                                <div class="gauge-center"></div>
                            </div>
                        </div>

                        <!-- Texto debajo de la imagen -->
                        <div class="flex flex-col items-center space-y-2 mt-20">
                            <strong class="text-xl text-gray-900">{{ $porcentajeSST }}%</strong>
                            <div class="text-center">
                                <strong>AVANCE ANUAL DEL PROGRAMA SST</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
                        <div class="flex flex-col items-center space-y-2 mt-20">
                            <strong class="text-xl text-gray-900">{{ $dato->covid_positivos }}</strong>
                            <div class="text-center">
                                <strong>CASOS POSITIVOS</strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md h-full">
                <div class="text-center">
                    <strong>ACTOS Y CONDICIONES INSEGURAS</strong>
                </div>
                <!-- Tercer Nivel: Tarjeta centrada -->
                <div class="flex justify-center space-x-4">

                    <!-- Tarjeta 2: Imagen a la derecha, texto (strong) a la izquierda -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md w-full max-w-xs flex items-center justify-end">
                        <div class="text-center">
                            <strong class="text-sm mr-4">ACTOS INSEGUROS</strong>
                        </div>
                        <div class="relative w-full h-full mr-2">
                            <img src="{{ asset('images/cone.svg') }}" alt="cone" class="w-full h-full">
                            <!-- Número en la mitad de la imagen -->
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-bold text-md">
                                {{ $dato->actos_inseguros }}
                            </span>
                        </div>
                    </div>

                    <!-- Tarjeta 1: Imagen a la izquierda, texto (strong) a la derecha -->
                    <div class="bg-gray-200 p-4 rounded-lg shadow-md w-full max-w-xs flex items-center">
                        <div class="relative w-full h-full mr-2">
                            <img src="{{ asset('images/cone.svg') }}" alt="cone" class="w-full h-full">
                            <!-- Número en la mitad de la imagen -->
                            <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white font-bold text-md">
                            {{ $dato->condiciones_inseguras }}
                            </span>
                        </div>
                        <div class="text-center">
                            <strong class="text-sm">CONDICIONES INSEGURAS</strong>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <footer class="bg-blue-600 p-4 text-white text-center">
        <p>&copy; 2024 Reporte de Seguridad y Salud en el Trabajo. Todos los derechos reservados.</p>
    </footer>

    @section('js')
    <script>
        $(document).ready(function() {
            $('#ano, #mes').on('change',
                function() {
                    var ano = $('#ano').val();
                    var mes = $('#mes').val();

                    $.ajax({
                        type: 'GET',
                        url: '/filtrar-datos',
                        data: { ano: ano, mes: mes },
                        success: function(data) {
                            $('#dasboard').html(data);
                        }
                    });
            });
        });
    </script>
    @endsection

</body>

</html>