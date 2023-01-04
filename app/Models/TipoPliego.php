<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPliego extends Model
{
    use HasFactory;
    protected $table = 'tipo_pliegos';
    public $timestamps = false;

    protected $fillable =[
        'descripcion',
    ];
    public function pliegos_tarifas()
    {
        return $this->hasMany(PliegoTarifa::class, 'id_tipo_pliego');
    }
    public function pliegos_2013_tarifas()
    {
        return $this->hasMany(Pliego2013Tarifa::class, 'id_tipo_pliego');
    }
}
