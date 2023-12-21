<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    
    protected $table = 'certificados';

    protected $fillable = [
        'curso_id',
        'user_id',
        'inscricao_id',
        'nome_responsavel',
      
         
    ];

    protected $dates = [ 'date'

    ];



    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function curso () {
        return $this->belongsTo('App\Curso', 'curso_id');
    }

    public function inscricao () {
        return $this->belongsTo('App\Inscricao', 'inscricao_id');
    }

    public function scopeWhereLike($query, $column, $value)
    {
        return $query->where($column, 'like', "%$value%");
    }

    public function scopeOrWhereLike($query, $column, $value)
    {
        return $query->orWhere($column, 'like', "%$value%");
    }

}
