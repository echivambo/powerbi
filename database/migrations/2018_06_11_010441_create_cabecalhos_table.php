<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabecalhosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabecalhos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('data_consulta',30);
            $table->integer('numero_consulta');
            $table->string('nid_csr_pf',30);
            $table->string('nid_tarv',30);
            $table->string('parceiro_presente_na_csr_pf',10);
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
        Schema::dropIfExists('cabecalhos');
    }
}
