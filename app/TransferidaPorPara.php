<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferidaPorPara extends Model
{
    protected $fillable = [
        'transferida_por_para', 'observacao', 'cabecalho_id', 'user_id'
    ];

    protected $dates = ['deleted_at'];
}
