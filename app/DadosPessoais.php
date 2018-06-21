<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosPessoais extends Model
{
    protected $fillable = [
        'nome', 'sexo', 'faixa_etaria', 'residencia', 'contacto', 'cabecalho_id', 'user_id'
    ];
    protected $dates = ['deleted_at'];
}
