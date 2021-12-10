<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modulos;

class ModulosController extends Controller
{
    //

    public function index(){
        $modulos = Modulos::all();
        return view('modulos', array('arrayModulos' => $modulos));
    }
}
