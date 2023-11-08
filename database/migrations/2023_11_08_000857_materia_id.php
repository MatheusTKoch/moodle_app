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
        Schema::table('provas', function(Blueprint $table) {
            $table->foreignId('materia_id')->constrained(
                table: 'materias', indexName: 'materias_prova_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign('materia_id');
    }
};
