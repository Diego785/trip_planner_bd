<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruta extends Model
{
    protected $fillable = [
        'id',
        'Shape',
        'FID_stops2',
        'Longi',
        'Lati',
        'Punto',
        'Tipo',
        'code',
        'orden',
        'PuntoD',
        'LongiD',
        'LatiD',
    ];

    use HasFactory;
}
