@extends('layout')
@section('title','Servicios')
@section('content')
<h2>Servicios</h2>
<tr>
    <td colspan="4">
    <a href="{{ route('servicios.create') }}">Nuevo Servicio</a>

    </td>
</tr>
<tr>
    <th colspan="4">Listado de Servicios</th>
</tr>
@if ($servicios)
    @foreach($servicios as $servicio)
        <tr>
            <td colspan="4">
                <a href="{{ route('servicios.show', $servicio) }}">{{ $servicio->titulo }}</a>
            </td>
        </tr>

@endforeach
@else
<li>No existe ningun servicio que mostrar</li>
@endif
</ul>
@endsection