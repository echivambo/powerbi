<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExameClinicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exame_clinicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rastreio_e_tratamento_de_its',60);
            $table->string('outras_patologias',60)->nullable();
            $table->string('fez_exame_clinico_da_mama',10);
            $table->string('exame_clinico_da_mama',60)->nullable();
            $table->string('tratado',10)->nullable();
            $table->string('transferida',20);
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
        Schema::dropIfExists('exame_clinicos');
    }
}
