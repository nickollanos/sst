<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class DatosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $meses = [
            'enero',
            'febrero',
            'marzo',
            'abril',
            'mayo',
            'junio',
            'julio',
            'agosto',
            'septiembre',
            'octubre',
            'noviembre',
            'diciembre'
        ];

        $años = [
            '2022',
            '2023',
            '2024'
        ];

        $trabajadores = fake()->numberBetween(10, 100);
        $administrativos = 10;
        $operativos = $trabajadores - $administrativos;

        $accidentes = fake()->numberBetween(1, 10);
        $accidentes_administrativos = $accidentes * 0.2;
        $accidentes_operativos = $accidentes - $accidentes_administrativos - 3;
        $accidentes_otros = 3;

        $incidentes = fake()->numberBetween(1, 10);
        $incidentes_administrativos = $incidentes * 0.2;
        $incidentes_operativos = $incidentes - $incidentes_administrativos - 3;
        $incidentes_otros = 3;

        $inspecciones_programadas = fake()->numberBetween(1, 10);
        $inspecciones_ejecutadas = $inspecciones_programadas * 0.6;

        $capacitaciones_programadas = fake()->numberBetween(1, 10);
        $capacitaciones_ejecutadas = $capacitaciones_programadas * 0.6;

        $simulacros_programados = fake()->numberBetween(1, 10);
        $simulacros_ejecutados = $simulacros_programados * 0.6;

        $PASST_programados = fake()->numberBetween(1, 10);
        $PASST_ejecutados = $PASST_programados * 0.6;

        return [
                'ano'                             => fake()->randomElement($años),
                'mes'                             => fake()->randomElement($meses),
                'trabajadores'                    => $trabajadores,
                'administrativos'                 => $administrativos,
                'operativos'                      => $operativos,
                'actos_inseguros'                 => fake()->numberBetween(1, 10),
                'condiciones_inseguras'           => fake()->numberBetween(1, 10),
                'accidentes'                      => $accidentes,
                'accidentes_administrativos'      => $accidentes_administrativos,
                'accidentes_operativos'           => $accidentes_operativos,
                'accidentes_otros'                => $accidentes_otros,
                'incidentes'                      => $incidentes,
                'incidentes_administrativos'      => $incidentes_administrativos,
                'incidentes_operativos'           => $incidentes_operativos,
                'incidentes_otros'                => $incidentes_otros,
                'indice_severidad'                => fake()->randomFloat(1, 0, 100),
                'indice_frecuencia'               => fake()->randomFloat(1, 0, 100),
                'indice_accidentabilidad'         => fake()->randomFloat(1, 0, 100),
                'covid_positivos'                 => fake()->numberBetween(1, 10),
                'inspecciones_programadas'        => $inspecciones_programadas,
                'inspecciones_ejecutadas'         => $inspecciones_ejecutadas,
                'capacitaciones_programadas'      => $capacitaciones_programadas,
                'capacitaciones_ejecutadas'       => $capacitaciones_ejecutadas,
                'simulacros_programados'          => $simulacros_programados,
                'simulacros_ejecutados'           => $simulacros_ejecutados,
                'PASST_programados'               => $PASST_programados,
                'PASST_ejecutados'                => $PASST_ejecutados,
        ];
    }
}
