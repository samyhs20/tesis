<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pliego2013Tarifa extends Model
{
    use HasFactory;
    protected $table = 'pliego_2013_tarifas';
    public $timestamps = false;

    protected $fillable =[
        'id_tipo_pliego',
        'id_tarifa',
        'id_validacion',
        'comercial',
        'demanda',
        'cargo_energia1',
        'cargo_energia2',
        'cargo_energia3',
        'cargo_energia4',
        'cargo_energia5',
        'cargo_energia6',
        'cargo_energia7',
        'cargo_energia8',
        'cargo_energia9',
        'cargo_energia10',
        'cargo_energia11',
        'cargo_energia12',
        'cargo_energia13',
        'cargo_energia14',
        'cargo_energia15',
        'nivel_voltaje',
    ];

    public function tipo_pliego(){
        return $this->belongsTo(TipoPliego::class, 'id_tipo_pliego', 'id');
    }
    public function tarifa(){
        return $this->belongsTo(Tarifa::class, 'id_tarifa', 'id');
    }
}
