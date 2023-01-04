<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    use HasFactory;
    protected $table = 'cantones';
    public $timestamps = false;
    protected $primaryKey = 'codigo';

    protected $fillable =[
    'codigo',
    'descripcion',
    'id_provincia',
    ];

    public function provincia(){
        return $this->belongsTo(Provincia::class, 'id_provincia', 'codigo');
    }

    public function parroquias()
    {
        return $this->hasMany(Canton::class, 'id_canton');
    }
}
