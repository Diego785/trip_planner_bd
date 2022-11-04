<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Recorrido;
use Illuminate\Http\Request;

class RecorridoController extends Controller
{
    public function index(){
        return Recorrido::all();
    }

}
