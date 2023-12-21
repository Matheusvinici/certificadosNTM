<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

    protected $table = 'registros';

    protected $fillable = [
    'formacao',
    'formador',
    'sugestao',
    'codigo',
    'resultado',
    'inscricao_id',
    'curso_id',
    'user_id',
    'encontro',


    ];
}
