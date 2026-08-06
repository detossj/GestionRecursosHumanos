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
        Schema::create('solicitud_ausencias', function (Blueprint $table) {
            $table->id('id_solicitud');
            $table->enum('tipo_ausencia', ['Vacaciones', 'Permiso', 'Enfermedad']);
            $table->date('fecha_inicio'); 
            $table->date('fecha_fin'); 
            $table->integer('dias_solicitados'); 
            $table->enum('estado_solicitud', ['Pendiente', 'Aprobado', 'Rechazado'])->default('Pendiente');
            $table->string('motivo_detalle')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_ausencias');
    }
};
