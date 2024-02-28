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
            $table->string('descricao');
            $table->integer('nota')->nullable()->default(null);
            $table->foreignId('aluno_id')->constrained(
                table: 'alunos', indexName: 'aluno_prova_id'
            );
            $table->integer('professor_id')->nullable()->default(null);
            $table->string('caminho_arquivo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('provas', function(Blueprint $table) {
            $table->dropForeign('aluno_prova_id');
        });
        Schema::drop('provas');
    }
};
