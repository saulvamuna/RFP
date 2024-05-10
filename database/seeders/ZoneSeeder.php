<?php

namespace Database\Seeders;

use App\Models\Zone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Zone::create([
            'name' => 'Cadena de suministro'
        ]);
        Zone::create([
            'name' => 'Financiera'
        ]);
        Zone::create([
            'name' => 'Manufactura'
        ]);
        Zone::create([
            'name' => 'Talento humano'
        ]);
    }
}
