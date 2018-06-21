<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRTCancroColoUterinosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('r_t_cancro_colo_uterinos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fez_exameme_de_via',10);
            $table->string('resultado',30)->nullable();
            $table->string('crioterapia',30);
            $table->string('transferida',30);
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
        Schema::dropIfExists('r_t_cancro_colo_uterinos');
    }
}
