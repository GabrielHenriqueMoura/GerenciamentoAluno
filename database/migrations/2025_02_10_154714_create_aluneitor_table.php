<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('Alunoineitor', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('curso');
            $table->integer('periodo');
            $table->integer('ano_matricula');
            $table->integer('mes_matricula');
            $table->integer('dia_matricula');
            $table->string('status_matricula');
            $table->timestamps();
        });
    }

 
    public function down(): void
    {
        Schema::dropIfExists('aluneitor');
    }
};
