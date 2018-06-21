<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferidaPorParasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transferida_por_paras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('transferida_por_para',100);
            $table->string('observacao',100)->nullable();
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
        Schema::dropIfExists('transferida_por_paras');
    }
}
