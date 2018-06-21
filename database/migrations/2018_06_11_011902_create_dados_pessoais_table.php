<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDadosPessoaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dados_pessoais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome',100);
            $table->string('sexo',20);
            $table->string('faixa_etaria',30);
            $table->string('residencia',100);
            $table->string('contacto',20);
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
        Schema::dropIfExists('dados_pessoais');
    }
}
