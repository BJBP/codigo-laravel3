<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('cperApellido');
            $table->string('cPerNombre');
            $table->text('cPerDireccion');
            $table->date('dPerFechaNac');
            $table->integer('nPerEdad');
            $table->decimal('nPerSueldo', 8, 2); // Asumiendo un sueldo con dos decimales
            $table->boolean('nPerEstado'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personas');
    }
};
