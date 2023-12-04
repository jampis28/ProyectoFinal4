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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_personas")->nullable();
            $table->string("email");
            $table->string("password");
            $table->string("habilitado")->nullable();
            $table->date("fecha")->nullable();
            $table->unsignedBigInteger("id_rol")->nullable();
            $table->string("usuario_creacion")->nullable();
            $table->string("usuario_modificacion")->nullable();
            $table->foreign('id_personas')->references('id')->on('personas');
            $table->foreign('id_rol')->references('id')->on('roles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
