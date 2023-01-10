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
        Tarifa::create(['codigo' => 'ATCGCD03', 'codigo_tarifa' => 'AT', 'descripcion' => 'Abonados Especiales con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD04', 'codigo_tarifa' => 'AT', 'descripcion' => 'Bombeo de Agua con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD05', 'codigo_tarifa' => 'AT', 'descripcion' => 'Otros con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD08', 'codigo_tarifa' => 'AT', 'descripcion' => 'Servicio Comunitario con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD09', 'codigo_tarifa' => 'AT', 'descripcion' => 'Comercial con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD10', 'codigo_tarifa' => 'AT', 'descripcion' => 'Entidades Oficiales con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD11', 'codigo_tarifa' => 'AT', 'descripcion' => 'Escenarios Deportivos con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD12', 'codigo_tarifa' => 'AT', 'descripcion' => 'Autoconsumo con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD14', 'codigo_tarifa' => 'AT', 'descripcion' => 'Asistencia Social con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD15', 'codigo_tarifa' => 'AT', 'descripcion' => 'Beneficio Público con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTAPCD01', 'codigo_tarifa' => 'BT', 'descripcion' => 'Alumbrado Público']);
        Tarifa::create(['codigo' => 'BTCGCD01', 'codigo_tarifa' => 'BT', 'descripcion' => 'Comercial con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD02', 'codigo_tarifa' => 'BT', 'descripcion' => 'Industrial con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD03', 'codigo_tarifa' => 'BT', 'descripcion' => 'Asistencia Social con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD04', 'codigo_tarifa' => 'BT', 'descripcion' => 'Autoconsumo con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD05', 'codigo_tarifa' => 'BT', 'descripcion' => 'Beneficio Público con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD06', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD07', 'codigo_tarifa' => 'BT', 'descripcion' => 'Entidades Oficiales con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD08', 'codigo_tarifa' => 'BT', 'descripcion' => 'Escenarios Deportivos con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD09', 'codigo_tarifa' => 'BT', 'descripcion' => 'Otros con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD11', 'codigo_tarifa' => 'BT', 'descripcion' => 'Servicio Comunitario con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD12', 'codigo_tarifa' => 'BT', 'descripcion' => 'Ocasional']);
        Tarifa::create(['codigo' => 'BTCGCD20', 'codigo_tarifa' => 'BT', 'descripcion' => 'Beneficio Público con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD21', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua Comunidades Campesinas']);
        Tarifa::create(['codigo' => 'BTCGCD30', 'codigo_tarifa' => 'BT', 'descripcion' => 'Industrial con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD31', 'codigo_tarifa' => 'BT', 'descripcion' => 'Comercial con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD32', 'codigo_tarifa' => 'BT', 'descripcion' => 'Culto Religioso con Demanda']);
        Tarifa::create(['codigo' => 'BTCGCD34', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD35', 'codigo_tarifa' => 'BT', 'descripcion' => 'Entidades Oficiales con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD36', 'codigo_tarifa' => 'BT', 'descripcion' => 'Escenarios Deportivos con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD37', 'codigo_tarifa' => 'BT', 'descripcion' => 'Autoconsumo con Demana Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD38', 'codigo_tarifa' => 'BT', 'descripcion' => 'Otros con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGCD39', 'codigo_tarifa' => 'BT', 'descripcion' => 'Servicio Comunitario con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGSD01', 'codigo_tarifa' => 'BT', 'descripcion' => 'Comercial']);
        Tarifa::create(['codigo' => 'BTCGSD02', 'codigo_tarifa' => 'BT', 'descripcion' => 'Industrial Artesanal']);
        Tarifa::create(['codigo' => 'BTCGSD05', 'codigo_tarifa' => 'BT', 'descripcion' => 'Entidades Oficiales']);
        Tarifa::create(['codigo' => 'BTCGSD06', 'codigo_tarifa' => 'BT', 'descripcion' => 'Abonados Especiales con Demanda']);
        Tarifa::create(['codigo' => 'BTCGSD08', 'codigo_tarifa' => 'BT', 'descripcion' => 'Otros']);
        Tarifa::create(['codigo' => 'BTCGSD10', 'codigo_tarifa' => 'BT', 'descripcion' => 'Abonados Especiales con Demanda Horaria']);
        Tarifa::create(['codigo' => 'BTCGSD11', 'codigo_tarifa' => 'BT', 'descripcion' => 'Servicio Comunitario']);
        Tarifa::create(['codigo' => 'BTCGSD12', 'codigo_tarifa' => 'BT', 'descripcion' => 'Escenarios Deportivos']);
        Tarifa::create(['codigo' => 'BTCGSD13', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua']);
        Tarifa::create(['codigo' => 'BTCGSD14', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua']);
        Tarifa::create(['codigo' => 'BTCRSD02', 'codigo_tarifa' => 'BT', 'descripcion' => 'Residencial Temporal']);
        Tarifa::create(['codigo' => 'MTCGCD01', 'codigo_tarifa' => 'MT', 'descripcion' => 'Comercial con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD02', 'codigo_tarifa' => 'MT', 'descripcion' => 'Comercial con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD03', 'codigo_tarifa' => 'MT', 'descripcion' => 'Industrial con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD05', 'codigo_tarifa' => 'MT', 'descripcion' => 'Abonados Especiales con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD06', 'codigo_tarifa' => 'MT', 'descripcion' => 'Abonados Especiales con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD07', 'codigo_tarifa' => 'MT', 'descripcion' => 'Asistencia Social con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD08', 'codigo_tarifa' => 'MT', 'descripcion' => 'Asistencia Social con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD09', 'codigo_tarifa' => 'MT', 'descripcion' => 'Beneficio Público con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD10', 'codigo_tarifa' => 'MT', 'descripcion' => 'Beneficio Público con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD11', 'codigo_tarifa' => 'MT', 'descripcion' => 'Bombeo de Agua con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD12', 'codigo_tarifa' => 'MT', 'descripcion' => 'Bombeo de Agua con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD13', 'codigo_tarifa' => 'MT', 'descripcion' => 'Entidades Oficiales con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD14', 'codigo_tarifa' => 'MT', 'descripcion' => 'Entidades Oficiales con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD15', 'codigo_tarifa' => 'MT', 'descripcion' => 'Escenarios Deportivos con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD16', 'codigo_tarifa' => 'MT', 'descripcion' => 'Escenarios Deportivos con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD19', 'codigo_tarifa' => 'MT', 'descripcion' => 'Otros con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD30', 'codigo_tarifa' => 'MT', 'descripcion' => 'Bombeo de Agua Comunidades Campesinas']);
        Tarifa::create(['codigo' => 'MTCGCD31', 'codigo_tarifa' => 'MT', 'descripcion' => 'Estacionales y Ocasionales']);
        Tarifa::create(['codigo' => 'MTCGCD33', 'codigo_tarifa' => 'MT', 'descripcion' => 'Culto Religioso con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD34', 'codigo_tarifa' => 'MT', 'descripcion' => 'Servicio Comunitario con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD35', 'codigo_tarifa' => 'MT', 'descripcion' => 'Servicio Comunitario con Demanda']);
        Tarifa::create(['codigo' => 'MTCGCD36', 'codigo_tarifa' => 'MT', 'descripcion' => 'Autoconsumo con Demanda Horaria']);
        Tarifa::create(['codigo' => 'MTCGCD37', 'codigo_tarifa' => 'MT', 'descripcion' => 'Autoconsumo con Demanda']);
        Tarifa::create(['codigo' => 'NDCGCD01', 'codigo_tarifa' => 'BT', 'descripcion' => 'Asistencia Social con Demanda Horaria']);
        Tarifa::create(['codigo' => 'NA', 'codigo_tarifa' => 'AT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria']);
        Tarifa::create(['codigo' => 'NA', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria']);
        Tarifa::create(['codigo' => 'NA', 'codigo_tarifa' => 'BT', 'descripcion' => 'Abonados Especiales']);
        Tarifa::create(['codigo' => 'NA', 'codigo_tarifa' => 'BT', 'descripcion' => 'Vehículos Eléctricos con Demanda Horaria']);
        Tarifa::create(['codigo' => 'NA', 'codigo_tarifa' => 'MT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria']);
        Tarifa::create(['codigo' => 'ATCGCD07', 'codigo_tarifa' => 'AT', 'descripcion' => 'Industrial con Demanda Horaria Diferenciada - AT1']);
        Tarifa::create(['codigo' => 'ATCGCD13', 'codigo_tarifa' => 'AT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria Diferenciada']);
        Tarifa::create(['codigo' => 'ATCGCD16', 'codigo_tarifa' => 'AT', 'descripcion' => 'Estación de Carga Rápida con Demanda Horaria Diferenciada']);
        Tarifa::create(['codigo' => 'BTCGCD40', 'codigo_tarifa' => 'BT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria Diferenciada']);
        Tarifa::create(['codigo' => 'BTCGCD41', 'codigo_tarifa' => 'BT', 'descripcion' => 'Vehículos Eléctricos con Demanda Horaria Diferenciada']);
        Tarifa::create(['codigo' => 'BTCGSD03', 'codigo_tarifa' => 'BT', 'descripcion' => 'Asistencia Social']);
        Tarifa::create(['codigo' => 'BTCGSD04', 'codigo_tarifa' => 'BT', 'descripcion' => 'Beneficio Público']);
        Tarifa::create(['codigo' => 'BTCGSD09', 'codigo_tarifa' => 'BT', 'descripcion' => 'Culto Religioso']);
        Tarifa::create(['codigo' => 'BTCRSD01', 'codigo_tarifa' => 'BT', 'descripcion' => 'Residencial']);
        Tarifa::create(['codigo' => 'BTCRSD03', 'codigo_tarifa' => 'BT', 'descripcion' => 'Residencial para el Programa PEC']);
        Tarifa::create(['codigo' => 'EATCGCD1', 'codigo_tarifa' => 'AT', 'descripcion' => 'Industrial con Demanda Horaria Diferenciada - AT2']);
        Tarifa::create(['codigo' => 'MTCGCD25', 'codigo_tarifa' => 'MT', 'descripcion' => 'Estación de Carga Rápida con Demanda Horaria Diferenciada']);
        Tarifa::create(['codigo' => 'MTCGCD32', 'codigo_tarifa' => 'MT', 'descripcion' => 'Industrial con Demanda Horaria Diferenciada']);
        Tarifa::create(['codigo' => 'MTCGCD39', 'codigo_tarifa' => 'MT', 'descripcion' => 'Bombeo de Agua para Servicio Público de Agua con Demanda Horaria Diferenciada']);
    }
}
