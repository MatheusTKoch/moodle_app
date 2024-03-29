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
        Schema::create('profs', function(Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->string('email');
            $table->string('endereco');
            $table->foreignId('user_id')->constrained(
                table: 'users', indexName: 'professor_user_id'
            );
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('profs');
    }
};
