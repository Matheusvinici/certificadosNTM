<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscricao extends Model
{
    
    protected $table = 'inscricoes';

    protected $fillable = [
        'curso_id',
        'user_id',
        'cargo',
        'nome',
       
      
        
    ];

    protected $dates = [ 'date'

    ];




    public function user () {
        return $this->belongsTo('App\User', 'user_id');
    }


    public function curso () {
        return $this->belongsTo('App\Curso', 'curso_id');
    }

    public function registro()
    {
        return $this->hasMany('App\Registro');
    }

    public function certificados () {
        return $this->hasMany('App\Certificado', 'certificado_id');
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
