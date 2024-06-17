<?php

use Illuminate\Support\Facades\Route;
$servicios= [/*
    ['titulo' => 'Servicio 01'],
    ['titulo' => 'Servicio 02'],
    ['titulo' => 'Servicio 03'],
    ['titulo' => 'Servicio 04'],
    ['titulo' => 'Servicio 05'],*/
    ];
    Route::view('/', 'home')->name('home');
Route::view('nosotros', 'nosotros')->name('nosotros');
Route::get('servicios', 'App\Http\Controllers\ServiciosController@index')->name('index');
Route::view('contacto', 'contacto')->name('contacto');
// Route::get('servicios', 'ServiciosController@index')->name('servicios.index');
Route::get('servicios/crear', 'App\Http\Controllers\ServiciosController@create')->name('servicios.create');
Route::get('servicios/{id}', 'App\Http\Controllers\ServiciosController@show')->name('servicios.show');
Route::post('/servicios', 'App\Http\Controllers\ServiciosController@store')->name('servicios.store');
Route::get('servicios', 'App\Http\Controllers\ServiciosController@index')->name('servicios.index');
