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
        Schema::create('propiedad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->string('direccion', 200);
            $table->string('caracteristicas', 200);
            $table->string('estado', 20);
            $table->decimal('precioalquiler', 6, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('propiedad');
    }
};
