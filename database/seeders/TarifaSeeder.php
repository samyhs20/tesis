<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tarifa;

class TarifaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tarifa::create(['codigo_tarifa'=> 'ATCGCD03' ,'descripcion'=> 'Abonados Especiales con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD04' ,'descripcion'=> 'Bombeo de Agua con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD05' ,'descripcion'=> 'Otros con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD08' ,'descripcion'=> 'Servicio Comunitario con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD09' ,'descripcion'=> 'Comercial con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD10' ,'descripcion'=> 'Entidades Oficiales con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD11' ,'descripcion'=> 'Escenarios Deportivos con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD12' ,'descripcion'=> 'Autoconsumo con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD14' ,'descripcion'=> 'Asistencia Social con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD15' ,'descripcion'=> 'Beneficio Público con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTAPCD01' ,'descripcion'=> 'Alumbrado Público']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD01' ,'descripcion'=> 'Comercial con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD02' ,'descripcion'=> 'Industrial con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD03' ,'descripcion'=> 'Asistencia Social con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD04' ,'descripcion'=> 'Autoconsumo con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD05' ,'descripcion'=> 'Beneficio Público con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD06' ,'descripcion'=> 'Bombeo de Agua con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD07' ,'descripcion'=> 'Entidades Oficiales con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD08' ,'descripcion'=> 'Escenarios Deportivos con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD09' ,'descripcion'=> 'Otros con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD11' ,'descripcion'=> 'Servicio Comunitario con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD12' ,'descripcion'=> 'Ocasional']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD20' ,'descripcion'=> 'Beneficio Público con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD21' ,'descripcion'=> 'Bombeo de Agua Comunidades Campesinas']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD30' ,'descripcion'=> 'Industrial con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD31' ,'descripcion'=> 'Comercial con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD32' ,'descripcion'=> 'Culto Religioso con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD34' ,'descripcion'=> 'Bombeo de Agua con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD35' ,'descripcion'=> 'Entidades Oficiales con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD36' ,'descripcion'=> 'Escenarios Deportivos con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD37' ,'descripcion'=> 'Autoconsumo con Demana Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD38' ,'descripcion'=> 'Otros con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD39' ,'descripcion'=> 'Servicio Comunitario con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD01' ,'descripcion'=> 'Comercial']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD02' ,'descripcion'=> 'Industrial Artesanal']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD05' ,'descripcion'=> 'Entidades Oficiales']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD06' ,'descripcion'=> 'Abonados Especiales con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD08' ,'descripcion'=> 'Otros']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD10' ,'descripcion'=> 'Abonados Especiales con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD11' ,'descripcion'=> 'Servicio Comunitario']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD12' ,'descripcion'=> 'Escenarios Deportivos']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD13' ,'descripcion'=> 'Bombeo de Agua']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD14' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua']);
Tarifa::create(['codigo_tarifa'=> 'BTCRSD02' ,'descripcion'=> 'Residencial Temporal']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD01' ,'descripcion'=> 'Comercial con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD02' ,'descripcion'=> 'Comercial con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD03' ,'descripcion'=> 'Industrial con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD05' ,'descripcion'=> 'Abonados Especiales con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD06' ,'descripcion'=> 'Abonados Especiales con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD07' ,'descripcion'=> 'Asistencia Social con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD08' ,'descripcion'=> 'Asistencia Social con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD09' ,'descripcion'=> 'Beneficio Público con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD10' ,'descripcion'=> 'Beneficio Público con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD11' ,'descripcion'=> 'Bombeo de Agua con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD12' ,'descripcion'=> 'Bombeo de Agua con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD13' ,'descripcion'=> 'Entidades Oficiales con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD14' ,'descripcion'=> 'Entidades Oficiales con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD15' ,'descripcion'=> 'Escenarios Deportivos con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD16' ,'descripcion'=> 'Escenarios Deportivos con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD19' ,'descripcion'=> 'Otros con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD30' ,'descripcion'=> 'Bombeo de Agua Comunidades Campesinas']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD31' ,'descripcion'=> 'Estacionales y Ocasionales']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD33' ,'descripcion'=> 'Culto Religioso con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD34' ,'descripcion'=> 'Servicio Comunitario con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD35' ,'descripcion'=> 'Servicio Comunitario con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD36' ,'descripcion'=> 'Autoconsumo con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD37' ,'descripcion'=> 'Autoconsumo con Demanda']);
Tarifa::create(['codigo_tarifa'=> 'NDCGCD01' ,'descripcion'=> 'Asistencia Social con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> '' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> '' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> '' ,'descripcion'=> 'Abonados Especiales']);
Tarifa::create(['codigo_tarifa'=> '' ,'descripcion'=> 'Vehículos Eléctricos con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> '' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD07' ,'descripcion'=> 'Industrial con Demanda Horaria Diferenciada - AT1']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD13' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria Diferenciada']);
Tarifa::create(['codigo_tarifa'=> 'ATCGCD16' ,'descripcion'=> 'Estación de Carga Rápida con Demanda Horaria Diferenciada']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD40' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria Diferenciada']);
Tarifa::create(['codigo_tarifa'=> 'BTCGCD41' ,'descripcion'=> 'Vehículos Eléctricos con Demanda Horaria Diferenciada']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD03' ,'descripcion'=> 'Asistencia Social']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD04' ,'descripcion'=> 'Beneficio Público']);
Tarifa::create(['codigo_tarifa'=> 'BTCGSD09' ,'descripcion'=> 'Culto Religioso']);
Tarifa::create(['codigo_tarifa'=> 'BTCRSD01' ,'descripcion'=> 'Residencial']);
Tarifa::create(['codigo_tarifa'=> 'BTCRSD03' ,'descripcion'=> 'Residencial para el Programa PEC']);
Tarifa::create(['codigo_tarifa'=> 'EATCGCD1' ,'descripcion'=> 'Industrial con Demanda Horaria Diferenciada - AT2']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD25' ,'descripcion'=> 'Estación de Carga Rápida con Demanda Horaria Diferenciada']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD32' ,'descripcion'=> 'Industrial con Demanda Horaria Diferenciada']);
Tarifa::create(['codigo_tarifa'=> 'MTCGCD39' ,'descripcion'=> 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria Diferenciada']);
    }
}
