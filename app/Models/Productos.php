<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_linea_negocio',
        'url',
        'nombre',
        'subtitulo',
        'resumen',
        'miniatura',
        'banner',
        'description',
        'description_2',
        'form',
        'cta',
        'cta_description',
        'cta_link',
    ];
}
