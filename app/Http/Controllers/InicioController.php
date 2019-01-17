<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacto;

class InicioController extends Controller
{
    public function hola(){
        //Obtengo TODOS los registros de la tabla contactos
        $contactos = Contacto::all();

        //Argumentos con la info que va a utilizar la vista
        $argumentos = array();
        $argumentos['contactos'] = $contactos;
        return view('canelita', $argumentos);
    }
}
