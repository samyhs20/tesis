<?php

namespace App\Imports;

use Illuminate\Support\Collection;
//use Maatwebsite\Excel\Concerns\ToCollection;
use App\Models\PliegoTarifa;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;
use App\Models\Tarifa;

//class PliegoTarifaImport implements ToCollection
class PliegoTarifaImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(Array $row)
    {
        return new PliegoTarifa ([
            
            'id_tarifa'=> Tarifa::where('codigo_tarifa','=',$row['codigo_de_tarifa'])->value('id'),
            'id_demanda'=>$row['categoria'],

        ]);
    }


}
