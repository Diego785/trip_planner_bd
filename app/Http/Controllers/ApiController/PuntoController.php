<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Punto;
use Illuminate\Http\Request;

class PuntoController extends Controller
{
    public function index(){
        return Punto::all();
    }
}
