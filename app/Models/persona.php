<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    protected $fillable = [            'cperApellido',
    'cPerNombre',
    'cPerDireccion',
    'dPerFechaNac',
    'nPerEdad',
    'nPerSueldo',
    'nPerEstado'];
}
