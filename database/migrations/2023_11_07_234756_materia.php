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
        Schema::create('materias', function(Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'materia_user_id'
            );
            $table->timestamps();
        });

        Schema::table('provas', function(Blueprint $table) {
            $table->foreignId('materia_id')->constrained(
                table: 'materias', indexName: 'materia_prova_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('provas', function(Blueprint $table) {
                $table->dropForeign('materias_prova_id_foreign');
        });
        Schema::dropIfExists('materias');
    }
};
