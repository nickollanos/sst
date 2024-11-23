<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update fecha</title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 h-screen flex items-center justify-center">

    <!-- Tarjeta del formulario -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-semibold text-center mb-6">ACTUALIZAR FECHA ULTIMO ACCIDENTE</h2>

        <!-- Formulario -->
        <form action="{{ route('datos.updateFecha')}}" method="POST">
            <!-- Campo para ingresar fecha (año/mes/día) -->
             @csrf
            <div class="mb-4">
                <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha</label>
                <input type="date" id="fecha" name="fecha" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Botones -->
            <div class="flex justify-between mt-6">
                <button type="button" class="bg-gray-600 text-white px-6 py-2 rounded-md hover:bg-gray-700 w-full sm:w-auto"> <a href="{{ url('/') }}">Volver </a></button>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 w-full sm:w-auto">Guardar</button>
            </div>
        </form>
    </div>

</body>
</html>
