<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create(['codigo'=>4,'descripcion'=> 'CARCHI']);
        Provincia::create(['codigo'=>5,'descripcion'=> 'COTOPAXI']);
        Provincia::create(['codigo'=>6,'descripcion'=> 'CHIMBORAZO']);
        Provincia::create(['codigo'=>7,'descripcion'=> 'EL ORO']);
        Provincia::create(['codigo'=>8,'descripcion'=> 'ESMERALDAS']);
        Provincia::create(['codigo'=>9,'descripcion'=> 'GUAYAS']);
        Provincia::create(['codigo'=>10,'descripcion'=> 'IMBABURA']);
        Provincia::create(['codigo'=>11,'descripcion'=> 'LOJA']);
        Provincia::create(['codigo'=>12,'descripcion'=> 'LOS RIOS']);
        Provincia::create(['codigo'=>13,'descripcion'=> 'MANABI']);
        Provincia::create(['codigo'=>14,'descripcion'=> 'MORONA SANTIAGO']);
        Provincia::create(['codigo'=>15,'descripcion'=> 'NAPO']);
        Provincia::create(['codigo'=>16,'descripcion'=> 'PASTAZA']);
        Provincia::create(['codigo'=>17,'descripcion'=> 'PICHINCHA']);
        Provincia::create(['codigo'=>18,'descripcion'=> 'TUNGURAHUA']);
        Provincia::create(['codigo'=>19,'descripcion'=> 'ZAMORA CHINCHIPE']);
        Provincia::create(['codigo'=>20,'descripcion'=> 'GALAPAGOS']);
        Provincia::create(['codigo'=>21,'descripcion'=> 'SUCUMBIOS']);
        Provincia::create(['codigo'=>22,'descripcion'=> 'ORELLANA']);
        Provincia::create(['codigo'=>23,'descripcion'=> 'SANTO DOMINGO DE LOS TSACHILAS']);
        Provincia::create(['codigo'=>24,'descripcion'=> 'SANTA ELENA']);
        Provincia::create(['codigo'=>90,'descripcion'=> 'ZONA NO DELIMITADA']);

    }
}
