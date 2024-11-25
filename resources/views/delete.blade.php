<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-sm w-full h-full">
        <div></div>
    </div>

    <!-- Tarjeta del formulario -->
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-7xl mt-24 mx-auto">
        <h2 class="text-2xl font-semibold text-center mb-6">CREAR NUEVO REGISTRO</h2>



        <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-7xl mt-[50rem]">
            <h2 class="text-2xl font-semibold text-center mb-6">CREAR NUEVO REGISTRO</h2>

            <!-- Formulario -->
            <form action="{{ route('datos.store')}}" method="POST">
                @csrf
                <!-- Usamos la rejilla para organizar los campos -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    <!-- Campo para ingresar fecha (año/mes/día) -->
                    <div class="mb-4">
                        <label for="ano" class="block text-sm font-medium text-gray-700">AÑO</label>
                        <input type="text" id="ano" name="ano" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="mes" class="block text-sm font-medium text-gray-700">MES</label>
                        <input type="text" id="mes" name="mes" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="trabajadores" class="block text-sm font-medium text-gray-700">TRABAJADORES</label>
                        <input type="text" id="trabajadores" name="trabajadores" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="administrativos" class="block text-sm font-medium text-gray-700">TRABAJADORES ADMINISTRATIVOS</label>
                        <input type="text" id="administrativos" name="administrativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="operativos" class="block text-sm font-medium text-gray-700">TRABAJADORES OPERATIVOS</label>
                        <input type="text" id="operativos" name="operativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="actos_inseguros" class="block text-sm font-medium text-gray-700">CANTIDAD ACTOS INSEGUROS</label>
                        <input type="text" id="actos_inseguros" name="actos_inseguros" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="condiciones_inseguras" class="block text-sm font-medium text-gray-700">CANTIDAD CONDICIONES INSEGUROS</label>
                        <input type="text" id="condiciones_inseguras" name="condiciones_inseguras" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="accidentes" class="block text-sm font-medium text-gray-700">CANTIDAD DE ACCIDENTES</label>
                        <input type="text" id="accidentes" name="accidentes" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="accidentes_administrativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE ACCIDENTES ADMINISTRATIVOS</label>
                        <input type="text" id="accidentes_administrativos" name="accidentes_administrativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="accidentes_operativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE ACCIDENTES OPERATIVOS</label>
                        <input type="text" id="accidentes_operativos" name="accidentes_operativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="accidentes_otros" class="block text-sm font-medium text-gray-700">CANTIDAD DE OTROS ACCIDENTES</label>
                        <input type="text" id="accidentes_otros" name="accidentes_otros" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="incidentes" class="block text-sm font-medium text-gray-700">CANTIDAD DE INCIDENTES</label>
                        <input type="text" id="incidentes" name="incidentes" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="incidentes_administrativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE INCIDENTES ADMINISTRATIVOS</label>
                        <input type="text" id="incidentes_administrativos" name="incidentes_administrativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="incidentes_operativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE INCIDENTES OPERATIVOS</label>
                        <input type="text" id="incidentes_operativos" name="incidentes_operativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="incidentes_otros" class="block text-sm font-medium text-gray-700">CANTIDAD DE OTROS INCIDENTES</label>
                        <input type="text" id="incidentes_otros" name="incidentes_otros" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="indice_severidad" class="block text-sm font-medium text-gray-700">INDICE DE SEVERIDAD</label>
                        <input type="text" id="indice_severidad" name="indice_severidad" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="indice_frecuencia" class="block text-sm font-medium text-gray-700">INDICE DE FRECUENCIA</label>
                        <input type="text" id="indice_frecuencia" name="indice_frecuencia" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="indice_accidentabilidad" class="block text-sm font-medium text-gray-700">INDICE DE ACCIDENTABILIDAD</label>
                        <input type="text" id="indice_accidentabilidad" name="indice_accidentabilidad" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="covid_positivos" class="block text-sm font-medium text-gray-700">CANTIDAD DE POSITIVOS COVID</label>
                        <input type="text" id="covid_positivos" name="covid_positivos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="inspecciones_programadas" class="block text-sm font-medium text-gray-700">INSPECCIONES PROGRAMADAS</label>
                        <input type="text" id="inspecciones_programadas" name="inspecciones_programadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="inspecciones_ejecutadas" class="block text-sm font-medium text-gray-700">INSPECCIONES EJECUTADAS</label>
                        <input type="text" id="inspecciones_ejecutadas" name="inspecciones_ejecutadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="capacitaciones_programadas" class="block text-sm font-medium text-gray-700">CAPACITACIONES PROGRAMADAS</label>
                        <input type="text" id="capacitaciones_programadas" name="capacitaciones_programadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="capacitaciones_ejecutadas" class="block text-sm font-medium text-gray-700">CAPACITACIONES EJECUTADAS</label>
                        <input type="text" id="capacitaciones_ejecutadas" name="capacitaciones_ejecutadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="simulacros_programados" class="block text-sm font-medium text-gray-700">SIMULACROS PROGRAMADOS</label>
                        <input type="text" id="simulacros_programados" name="simulacros_programados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="simulacros_ejecutados" class="block text-sm font-medium text-gray-700">SIMULACROS EJECUTADOS</label>
                        <input type="text" id="simulacros_ejecutados" name="simulacros_ejecutados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="PASST_programados" class="block text-sm font-medium text-gray-700">PASST PROGRAMADOS</label>
                        <input type="text" id="PASST_programados" name="PASST_programados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="PASST_ejecutados" class="block text-sm font-medium text-gray-700">PASST EJECUTADOS</label>
                        <input type="text" id="PASST_ejecutados" name="PASST_ejecutados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>

                    <!-- Botón de Enviar -->
                    <div class="col-span-full">
                        <button type="button" class="bg-gray-600 text-white px-6 py-2 rounded-md hover:bg-gray-700 w-full sm:w-auto"> <a href="{{ url('/') }}">Volver </a></button>
                        <button type="submit" class="w-full py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition duration-300">Enviar</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Formulario -->
        <form action="{{ route('datos.store')}}" method="POST">
            <!-- Campo para ingresar fecha (año/mes/día) -->
             @csrf
             </div>

            <div class="mb-4">
                <label for="mes" class="block text-sm font-medium text-gray-700">MES</label>
                <input type="text" id="mes" name="mes" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="trabajadores" class="block text-sm font-medium text-gray-700">TRABAJADORES</label>
                <input type="text" id="trabajadores" name="trabajadores" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="administrativos" class="block text-sm font-medium text-gray-700">TRABAJADORES ADMINISTRATIVOS</label>
                <input type="text" id="administrativos" name="administrativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="operativos" class="block text-sm font-medium text-gray-700">TRABAJADORES OPERATIVOS</label>
                <input type="text" id="operativos" name="operativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="actos_inseguros" class="block text-sm font-medium text-gray-700">CANTIDAD ACTOS INSEGUROS</label>
                <input type="text" id="actos_inseguros" name="actos_inseguros" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="condiciones_inseguras" class="block text-sm font-medium text-gray-700">CANTIDAD CONDICIONES INSEGUROS</label>
                <input type="text" id="condiciones_inseguras" name="condiciones_inseguras" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="accidentes" class="block text-sm font-medium text-gray-700">CANTIDAD DE ACCIDENTES</label>
                <input type="text" id="accidentes" name="accidentes" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="accidentes_administrativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE ACCIDENTES ADMINISTRATIVOS</label>
                <input type="text" id="accidentes_administrativos" name="accidentes_administrativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="accidentes_operativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE ACCIDENTES OPERATIVOS</label>
                <input type="text" id="accidentes_operativos" name="accidentes_operativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="accidentes_otros" class="block text-sm font-medium text-gray-700">CANTIDAD DE OTROS ACCIDENTES</label>
                <input type="text" id="accidentes_otros" name="accidentes_otros" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="incidentes" class="block text-sm font-medium text-gray-700">CANTIDAD DE INCIDENTES</label>
                <input type="text" id="incidentes" name="incidentes" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="incidentes_administrativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE INCIDENTES ADMINISTRATIVOS</label>
                <input type="text" id="incidentes_administrativos" name="incidentes_administrativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="incidentes_operativos" class="block text-sm font-medium text-gray-700">CANTIDAD DE INCIDENTES OPERATIVOS</label>
                <input type="text" id="incidentes_operativos" name="incidentes_operativos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="incidentes_otros" class="block text-sm font-medium text-gray-700">CANTIDAD DE OTROS INCIDENTES</label>
                <input type="text" id="incidentes_otros" name="incidentes_otros" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="indice_severidad" class="block text-sm font-medium text-gray-700">INDICE DE SEVERIDAD</label>
                <input type="text" id="indice_severidad" name="indice_severidad" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="indice_frecuencia" class="block text-sm font-medium text-gray-700">INDICE DE FRECUENCIA</label>
                <input type="text" id="indice_frecuencia" name="indice_frecuencia" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="indice_accidentabilidad" class="block text-sm font-medium text-gray-700">INDICE DE ACCIDENTABILIDAD</label>
                <input type="text" id="indice_accidentabilidad" name="indice_accidentabilidad" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="covid_positivos" class="block text-sm font-medium text-gray-700">CANTIDAD DE POSITIVOS COVID</label>
                <input type="text" id="covid_positivos" name="covid_positivos" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="inspecciones_programadas" class="block text-sm font-medium text-gray-700">INSPECCIONES PROGRAMADAS</label>
                <input type="text" id="inspecciones_programadas" name="inspecciones_programadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="inspecciones_ejecutadas" class="block text-sm font-medium text-gray-700">INSPECCIONES EJECUTADAS</label>
                <input type="text" id="inspecciones_ejecutadas" name="inspecciones_ejecutadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="capacitaciones_programadas" class="block text-sm font-medium text-gray-700">CAPACITACIONES PROGRAMADAS</label>
                <input type="text" id="capacitaciones_programadas" name="capacitaciones_programadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="capacitaciones_ejecutadas" class="block text-sm font-medium text-gray-700">CAPACITACIONES EJECUTADAS</label>
                <input type="text" id="capacitaciones_ejecutadas" name="capacitaciones_ejecutadas" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="simulacros_programados" class="block text-sm font-medium text-gray-700">SIMULACROS PROGRAMADOS</label>
                <input type="text" id="simulacros_programados" name="simulacros_programados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="simulacros_ejecutados" class="block text-sm font-medium text-gray-700">SIMULACROS EJECUTADOS</label>
                <input type="text" id="simulacros_ejecutados" name="simulacros_ejecutados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="PASST_programados" class="block text-sm font-medium text-gray-700">PASST PROGRAMADOS</label>
                <input type="text" id="PASST_programados" name="PASST_programados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="PASST_ejecutados" class="block text-sm font-medium text-gray-700">PASST EJECUTADOS</label>
                <input type="text" id="PASST_ejecutados" name="PASST_ejecutados" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <!-- Botones -->
            <div class="flex justify-between mt-6">
                <button type="button" class="bg-gray-600 text-white px-6 py-2 rounded-md hover:bg-gray-700 w-full sm:w-auto"> <a href="{{ url('/') }}">Volver </a></button>
                <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-md hover:bg-blue-700 w-full sm:w-auto">Guardar</button>
            </div>
        </form>

</body>

</html>
