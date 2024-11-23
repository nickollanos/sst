<?php

namespace Database\Seeders;

use App\Models\Fechas;
use Illuminate\Support\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FechasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fecha       = Carbon::parse('2024-10-07');
        $fechas = [
            ['ultimo_accidente'      => $fecha]
         ];

         foreach ($fechas as $fecha){
             $fechaModel = Fechas::firstOrNew($fecha);
             if(!$fechaModel->exists){
                 $fechaModel->save();
             }
         }
    }
}
