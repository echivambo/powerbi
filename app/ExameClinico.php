<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExameClinico extends Model
{
    protected $fillable = [
        'rastreio_e_tratamento_de_its', 'outras_patologias', 'fez_exame_clinico_da_mama','exame_clinico_da_mama', 'tratado', 'transferida', 'cabecalho_id', 'user_id'
    ];
    protected $dates = ['deleted_at'];
}
