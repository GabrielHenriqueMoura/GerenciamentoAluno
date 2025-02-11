<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alunoineitor extends Model
{
    use HasFactory;

    protected $table ='Alunoineitor';

    protected $fillable = [
        'nome',
        'curso',
        'periodo',
        'ano_matricula',
        'mes_matricula',
        'dia_matricula',
        'status_matricula'
    ];
}
