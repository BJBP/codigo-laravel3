@extends('layout')

@section('title', 'Crear persona')
@section('content')

<table cellpadding="3" cellspacing="5">
    <tr>
        <th colspan="4">Crear nuevo persona</th>
    </tr>
    <form action="{{ route('personas.store') }}" method="post">
        @csrf
        @if ($errors->any())
            <tr>
                <td colspan="2" align="center">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endif
        <tr>
            <th>cperApellido</th>
            <td><input type="text" name="cperApellido" value="{{ old('cperApellido') }}"></td>
            @error('cperApellido')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <th>cPerNombre</th>
            <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre') }}"></td>
            @error('cPerNombre')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <th>cPerDireccion</th>
            <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion') }}"></td>
            @error('cPerDireccion')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <th>dPerFechaNac</th>
            <td><input type="text" name="dPerFechaNac" value="{{ old('dPerFechaNac') }}"></td>
            @error('dPerFechaNac')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <th>nPerEdad</th>
            <td><input type="text" name="nPerEdad" value="{{ old('nPerEdad') }}"></td>
            @error('nPerEdad')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <th>nPerSueldo</th>
            <td><input type="text" name="nPerSueldo" value="{{ old('nPerSueldo') }}"></td>
            @error('nPerSueldo')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <th>nPerEstado</th>
            <td>
                <select name="nPerEstado">
                    <option value="1" {{ old('nPerEstado') == 1 ? 'selected' : '' }}>Activo</option>
                    <option value="0" {{ old('nPerEstado') == 0 ? 'selected' : '' }}>Inactivo</option>
                </select>
            </td>
            @error('nPerEstado')
                <td><span style="color: red;">{{ $message }}</span></td>
            @enderror
        </tr>
        <tr>
            <td colspan="2" align="center"><button>Guardar</button></td>
        </tr>
    </form>
</table>

@endsection
