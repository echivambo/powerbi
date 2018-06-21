<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RTCancroColoUterino extends Model
{
    protected $fillable = [
        'fez_exameme_de_via', 'resultado', 'crioterapia', 'transferida', 'cabecalho_id', 'user_id'
    ];
    protected $dates = ['deleted_at'];
}
