<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRTSiflesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_t_sifles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estado_a_entrada_na_csr_pf',20);
            $table->string('resultado_do_teste_feito_na_csr_pf',30);
            $table->string('tratamento_do_utente_dose_recebida',30);
            $table->string('parceiro_recebeu_tratamento_na_csr_pf',10);
            $table->integer('cabecalho_id')->references('id')->on('cabecalhos');
            $table->integer('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('r_t_sifles');
    }
}
