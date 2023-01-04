<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaLectura extends Model
{
    use HasFactory;
    protected $table = 'nota_lecturas';
    public $timestamps = false;


    protected $fillable =[
        'codigo',
        'descripcion',
    ];

}
