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
        Schema::create('cornellnotes', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 200);
            $table->string('PalabrasClave', 500);
            $table->longText('Texto');
            $table->longText('Conclusion');
            $table->foreignId('user_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('topic_id')
                ->constrained()
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cornellnotes');
    }
};
