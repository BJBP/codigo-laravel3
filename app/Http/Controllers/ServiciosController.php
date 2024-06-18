<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;

class ServiciosController extends Controller
{
    public function index(){

        $servicios = Servicio::get();
        $servicios = Servicio::latest()->paginate(10);
        return view('servicios', compact('servicios'));
        
    }
    public function show($id) {
        return view('show', [
            'servicio' => Servicio::find($id)
        ]);
    }
    
    public function create() {
        return view('create');
    }

    public function store(){
        // Recogemos Las variables
        $camposv = request()->validate([
            'titulo' => 'required',
            'descripcion' => 'required'
        ]);
        
        // Almacenamos en la BD usando el modelo Servicio
        Servicio::create($camposv);
        
        // Redireccionamos a la vista index para ver el Listado de proyectos
        return redirect()->route('servicios.index');
    }
    
    
}    