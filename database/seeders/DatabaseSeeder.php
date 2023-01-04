<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProvinciaSeeder::class);
        $this->call(CantonSeeder::class);
        $this->call(ParroquiaSeeder::class);
        $this->call(TarifaSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(TipoPliegoSeeder::class);
        $this->call(NotaLecturaSeeder::class);
        $this->call(PliegoTarifaSeeder::class);
        $this->call(Pliego2013TarifaSeeder::class);
    }
}
