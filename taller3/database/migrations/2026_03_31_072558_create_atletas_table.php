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
    Schema::create('atletas', function (Blueprint $table) {
        $table->id();
        $table->string('nombres');
        $table->string('apellidos');
        $table->integer('edad');
        $table->string('documento');
        $table->string('correo');
        $table->string('telefono');
        $table->string('genero');
        $table->string('ciudad');
        $table->string('categoria');
        $table->string('experiencia');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atletas');
    }
};
