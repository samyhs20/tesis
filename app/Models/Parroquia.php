<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;
    protected $table = 'parroquias';
    public $timestamps = false;
    protected $primaryKey = 'codigo';

    protected $fillable =[
    'codigo',
    'descripcion',
    'id_provincia',
    'id_canton',
    ];

    public function provincia(){
        return $this->belongsTo(Provincia::class, 'id_provincia', 'codigo');
    }
    public function canton(){
        return $this->belongsTo(Canton::class, 'id_canton', 'codigo');
    }
}
