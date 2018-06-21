<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RHIVSeguimento extends Model
{
    protected $fillable = [
        'seroestado_a_entrada_1a_csr_pf', 'teste_de_hiv_na_consulta_de_csr', 'tarv', 'testagem_do_parceiro', 'cabecalho_id', 'user_id'
    ];
    protected $dates = ['deleted_at'];
}
