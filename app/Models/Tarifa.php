<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarifa extends Model
{
    use HasFactory;
    protected $table = 'tarifas';
    public $timestamps = false;

    protected $fillable =[
    'codigo_tarifa',
    'descripcion',
    ];

    public function pliegos_tarifas()
    {
        return $this->hasMany(PliegoTarifa::class, 'id_tarifa');
    }
    public function pliegos_2013_tarifas()
    {
        return $this->hasMany(Pliego2013Tarifa::class, 'id_tipo_pliego');
    }
}
