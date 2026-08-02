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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id('id_asistencia');
            $table->date('fecha_asistencia');
            $table->time('hora_entrada')->nullable(); 
            $table->time('hora_salida')->nullable();
            $table->decimal('horas_totales', 4, 2)->nullable();
            $table->enum('estado_asistencia', ['A tiempo', 'Tarde', 'Ausente', 'Horas extra']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
