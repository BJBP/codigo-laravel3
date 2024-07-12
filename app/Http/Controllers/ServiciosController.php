<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

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

    public function store(CreateServicioRequest $request){
    
        // Crea el servicio con los datos validados
        Servicio::create($request->validated());
        
        // Redirecciona a la vista index para ver el listado de servicios
        return redirect()->route('servicios.index');
    }
    
    
    
}    