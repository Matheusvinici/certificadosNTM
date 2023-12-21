<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    protected $fillable = [

        'nome',
        'conteudo_id',
       

        'periodo_inicial',
        'data_conclusao',
        'carga_horaria',
        'tipo',

        'conteudo_1',
        'conteudo_2',
        'conteudo_3',
        'conteudo_4',
        'conteudo_5',
        'conteudo_6',
        'conteudo_7',
        'conteudo_8',
        'conteudo_9',
        'conteudo_10',

        'conteudo_11',
        'conteudo_12',
        'conteudo_13',
        'conteudo_14',
        'conteudo_15',
        'conteudo_16',
        'conteudo_17',
        'conteudo_18',
        'conteudo_19',
        'conteudo_20',

        'conteudo_21',
        'conteudo_22',
        'conteudo_23',
        'conteudo_24',
        'conteudo_25',
        'conteudo_26',
        'conteudo_27',
        'conteudo_28',
        'conteudo_29',
        'conteudo_30',

        'data_1',
        'data_2',
        'data_3',
        'data_4',
        'data_5',
        'data_6',
        'data_7',
        'data_8',
        'data_9',
        'data_10',

        'data_11',
        'data_12',
        'data_13',
        'data_14',
        'data_15',
        'data_16',
        'data_17',
        'data_18',
        'data_19',
        'data_20',

        'data_21',
        'data_22',
        'data_23',
        'data_24',
        'data_25',
        'data_26',
        'data_27',
        'data_28',
        'data_29',
        'data_30',
    
        'quantidade_1',
        'quantidade_2',
        'quantidade_3',
        'quantidade_4',
        'quantidade_5',
        'quantidade_6',
        'quantidade_7',
        'quantidade_8',
        'quantidade_9',
        'quantidade_10',
         
        'quantidade_11',
        'quantidade_12',
        'quantidade_13',
        'quantidade_14',
        'quantidade_15',
        'quantidade_16',
        'quantidade_17',
        'quantidade_18',
        'quantidade_19',
        'quantidade_20',

        'quantidade_21',
        'quantidade_22',
        'quantidade_23',
        'quantidade_24',
        'quantidade_25',
        'quantidade_26',
        'quantidade_27',
        'quantidade_28',
        'quantidade_29',
        'quantidade_30',
       

            
    ];

    

    
    public function certificados () {
        return $this->hasMany('App\Certificado', 'certificado_id');
    }

    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }  


}
