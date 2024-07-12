<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ContactoController extends Controller
{
    //
    public function store(){
        request()->validate([
            'nombre' => 'required',
            'email' => 'required',
            'asunto' => 'required',
            'mensaje' => 'required',
        ]);
        return 'Datos validados';
    }
}
