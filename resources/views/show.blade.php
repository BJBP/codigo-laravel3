@extends('layout')

@section('title', 'Detalle del Servicio')

@section('content')
<h2>Servicios</h2>
<table>
    <tr>
        <th colspan="4">Detalle de Servicios</th>
    </tr>
    <tr>
        <td>Titulo:</td>
        <td>{{ $servicio->titulo }}</td>
    </tr>
    <tr>
        <td>Descripción:</td>
        <td>{{ $servicio->descripcion }}</td>
    </tr>
</table>
@endsection
