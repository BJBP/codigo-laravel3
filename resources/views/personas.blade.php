@extends('layout')
@section('title','personas')
@section('content')
<h2>personas</h2>
<tr>
    <td colspan="4">
    <a href="{{ route('personas.create_personas') }}">Nuevo persona</a>

    </td>
</tr>
<tr>
    <th colspan="4">Listado de personas</th>
</tr>
@if ($personas)
    @foreach($personas as $persona)
        <tr>
            <td colspan="4">
                <a href="{{ route('personas.show', $persona) }}">{{ $persona->cperApellido }}</a>
            </td>
        </tr>

@endforeach
@else
<li>No existe ningun persona que mostrar</li>
@endif
</ul>
@endsection