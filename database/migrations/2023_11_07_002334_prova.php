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
        Schema::create('provas', function(Blueprint $table) {
            $table->id();
            $table->integer('nota');
            $table->foreignId('aluno_id')->constrained(
                table: 'alunos', indexName: 'aluno_prova_id'
            );
            $table->foreignId('professor_id')->constrained(
                table: 'professores', indexName: 'professor_prova_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $table->dropForeign('aluno_id');
        $table->dropForeign('professor_id');
        Schema::drop('provas');
    }
};