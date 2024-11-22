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
            <select class="bg-blue-500 text-white p-2 rounded-md" name="ano" id="ano">
                <option value="">Año</option>
                @foreach($datos->unique('ano')->sortByDesc('ano') as $dato)
                <option value="{{ $dato->ano }}" @if(old('ano')==$dato->ano ) selected @endif>{{ $dato->ano }}</option>
                @endforeach
            </select>
            <!-- Select Mes -->
            <select class="bg-blue-500 text-white p-2 rounded-md" name="mes" id="mes">
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

    <main class="flex justify-center items-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full">
            <h1 class="text-xl font-semibold text-center text-gray-800">
                ¡Bienvenido!
            </h1>
            <p class="mt-4 text-center text-gray-600">
                Para iniciar, por favor selecciona el año y el mes que quieres consultar y luego le das click al boton buscar!
            </p>
        </div>
    </main>


    <!-- Footer -->
    <footer class="bg-blue-600 p-4 text-white text-center">
        <p>&copy; 2024 Reporte de Seguridad y Salud en el Trabajo. Todos los derechos reservados.</p>
    </footer>

    <script src="{{ asset('js/sweetalert2.js') }}"></script>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @if (session()->has('message'))
        <script>
            Swal.fire({
                title: 'Mensaje',
                text: "{{ session('message') }}",
                icon: 'error',
                confirmButtonText: 'Aceptar'
            });
        </script>
    @endif
    <script>
        //-------------------------------------------
        // este se utiliza para el menu hamburguesa
        //-------------------------------------------
        // Mostrar el sidebar cuando se hace clic en el icono del menú hamburguesa
        // Mostrar el sidebar cuando se hace clic en el icono del menú hamburguesa
        document.getElementById('hamburger-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('translate-x-0');
        });
        // Cerrar el sidebar cuando se hace clic en el botón de cerrar
        document.getElementById('close-sidebar-btn').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('translate-x-0');
        });
        // Acción para el botón de "Actualizar"
        document.getElementById('update-btn').addEventListener('click', function() {
            alert('Acción de Actualizar');
        });
    </script>

</body>

</html>
