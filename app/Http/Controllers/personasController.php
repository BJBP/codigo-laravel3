<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\persona;

class personasController extends Controller
{
    public function index(){

        $personas = persona::get();
        $personas = persona::latest()->paginate(10);
        return view('personas', compact('personas'));
        
    }
    public function show($id) {
        return view('show', [
            'persona' => persona::find($id)
        ]);
    }
    
    public function create_personas() {
        return view('create_personas');
    }

    public function store(){
        $camposv = request()->validate([
            'cperApellido' => 'required',
            'cPerNombre' => 'required',
            'cPerDireccion' => 'required',
            'dPerFechaNac' => 'required',
            'nPerEdad' => 'required',
            'nPerSueldo' => 'required',
            'nPerEstado' => 'required'
        ]);
        
        // Almacenamos en la BD usando el modelo Servicio
        persona::create($camposv);
        
        // Redireccionamos a la vista index para ver el Listado de proyectos
        return redirect()->route('personas.index');
    }
    
    
}    