<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RTSifles extends Model
{
    protected $fillable = [
        'estado_a_entrada_na_csr_pf', 'resultado_do_teste_feito_na_csr_pf', 'tratamento_do_utente_dose_recebida', 'parceiro_recebeu_tratamento_na_csr_pf', 'cabecalho_id', 'user_id'
    ];
    protected $dates = ['deleted_at'];
}
