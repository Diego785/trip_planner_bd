<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Recorrido;
use App\Models\Linea;
use App\Models\Punto;
use Illuminate\Http\Request;

class RecorridoController extends Controller
{
    public function index()
    {
        return Recorrido::all();
    }

    public function recorridoLinea(Request $request)
    {
        return Recorrido::join('lineas', 'recorridos.linea_id', 'lineas.id')
            ->select('recorridos.id', 'recorridos.code', 'recorridos.velocidad', 'recorridos.descripcion as descripcion_micro', 'lineas.descripcion as descripcion_linea', 'lineas.foto', 'lineas.telefono')
            ->where('recorridos.id', $request->recorrido)
            ->get();
    }
}
