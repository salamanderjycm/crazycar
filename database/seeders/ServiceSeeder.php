<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title' => 'Cambio de aceite',
                'description' => 'Aceite sintético para motor',
                'price' => 80
            ],
            [
                'title' => 'Alineación y balanceo',
                'description' => 'Mejora el rendimiento de las llantas',
                'price' => 120
            ],
            [
                'title' => 'Diagnóstico computarizado',
                'description' => 'Análisis electrónico completo del vehículo',
                'price' => 100
            ],
            [
                'title' => 'Cambio de frenos',
                'description' => 'Sustitución de pastillas de freno',
                'price' => 150
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
