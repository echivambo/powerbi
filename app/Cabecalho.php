<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabecalho extends Model
{
    protected $fillable = [
        'data_consulta', 'numero_consulta', 'nid_csr_pf', 'nid_tarv', 'parceiro_presente_na_csr_pf'
    ];
    protected $dates = ['deleted_at'];
}
