<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaneamentoFamiliar extends Model
{
    protected $fillable = [
        'utente_pf', 'metodo_do_pf', 'tipo_do_metodo_do_pf', 'estado_da_utente_no_metodo', 'total_distribuido', 'metodo_anterior', 'cabecalho_id', 'user_id'
    ];
    protected $dates = ['deleted_at'];
}
