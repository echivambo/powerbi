<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaneamentoFamiliarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planeamento_familiars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('utente_pf',20);
            $table->string('metodo_do_pf',20);
            $table->string('tipo_do_metodo_do_pf',60)->nullable();
            $table->string('estado_da_utente_no_metodo',30)->nullable();
            $table->integer('total_distribuido')->nullable();
            $table->string('metodo_anterior',20)->nullable();
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
        Schema::dropIfExists('planeamento_familiars');
    }
}
