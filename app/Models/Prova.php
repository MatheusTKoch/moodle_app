<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    use HasFactory;

    protected $fillable = ['nota', 'aluno_id', 'professor_id', 'materia_id'];
}
