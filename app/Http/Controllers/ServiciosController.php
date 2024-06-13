<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiciosController extends Controller
{
    public function index(){

        $servicios = [
        ['titulo' => 'Mantenimiento'],
        ['titulo' => 'Afinamiento'],
        ['titulo' => 'Cambio de Acceite'],
        ['titulo' => 'Lavado tipo salón'],
        ];
        return view('servicios', compact('servicios'));
        }}
