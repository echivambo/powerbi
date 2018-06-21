<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRHIVSeguimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_h_i_v_seguimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seroestado_a_entrada_1a_csr_pf', 20);
            $table->string('teste_de_hiv_na_consulta_de_csr', 20);
            $table->string('tarv', 30);
            $table->string('testagem_do_parceiro', 20);
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
        Schema::dropIfExists('r_h_i_v_seguimentos');
    }
}
