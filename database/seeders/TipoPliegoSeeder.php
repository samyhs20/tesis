<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoPliego;

class TipoPliegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoPliego::create(['descripcion'=> 'Empresa Quito']);
        TipoPliego::create(['descripcion'=> 'Empresa Guayaquil']);
    }
}
