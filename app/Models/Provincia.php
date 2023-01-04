<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $table = 'provincias';
    public $timestamps = false;
    protected $primaryKey = 'codigo';

    protected $fillable =[
    'codigo',
    'descripcion',
    ];

    public function cantones()
    {
        return $this->hasMany(Canton::class, 'id_provincia');
    }
    public function parroquias()
    {
        return $this->hasMany(Parroquia::class, 'id_provincia');
    }
}
