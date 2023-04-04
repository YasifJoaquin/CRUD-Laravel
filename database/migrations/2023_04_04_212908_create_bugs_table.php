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
        Schema::create('bugs', function (Blueprint $table) {
            $table->id();
            $table->string ('descripcion', 500);
            $table->string ('codigo', 100)->nullable();
            $table->string ('solucion', 500)->nullable();
            $table->integer ('estado');
            $table->string('plataforma',200);
            $table->foreignId('user_id')
                ->constrained()
                ->opnUpdate('restrict')
                ->onDelete('restrict');
            $table->foreignId('subject_id')
                ->constrained()
                ->opnUpdate('restrict')
                ->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bugs');
    }
};
