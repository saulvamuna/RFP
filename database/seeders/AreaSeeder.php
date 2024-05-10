<?php

namespace Database\Seeders;

use App\Models\Area;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Area::create([
            'name' => 'Logistica',
            'id_zone' => '1'
        ]);
        Area::create([
            'name' => 'Planeacion',
            'id_zone' => '1'
        ]);
        Area::create([
            'name' => 'Negociacion',
            'id_zone' => '1'
        ]);
        Area::create([
            'name' => 'TI',
            'id_zone' => '2'
        ]);
        Area::create([
            'name' => 'Planeacion financiera',
            'id_zone' => '2'
        ]);
        Area::create([
            'name' => 'Tesoreria',
            'id_zone' => '2'
        ]);
        Area::create([
            'name' => 'Contabilidad',
            'id_zone' => '2'
        ]);
        Area::create([
            'name' => 'Calidad',
            'id_zone' => '3'
        ]);
        Area::create([
            'name' => 'Produccion',
            'id_zone' => '3'
        ]);
        Area::create([
            'name' => 'Ingenieria',
            'id_zone' => '3'
        ]);
        Area::create([
            'name' => 'Mantenimiento',
            'id_zone' => '3'
        ]);
        Area::create([
            'name' => 'Excelencia Operacional',
            'id_zone' => '3'
        ]);
        Area::create([
            'name' => 'SST',
            'id_zone' => '4'
        ]);
        Area::create([
            'name' => 'Talento humano',
            'id_zone' => '4'
        ]);
        Area::create([
            'name' => 'Gestion ambiental',
            'id_zone' => '4'
        ]);
    }
}
