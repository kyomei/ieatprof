<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulos', function (Blueprint $table) {
            $table->increments('id_modulo');
            $table->string('nome_modulo', 100);
            $table->longText('descricao_modulo');
            $table->integer('duracao_horas_modulo');
            $table->integer('duracao_meses_modulo');           
            $table->boolean('status_modulo');
            $table->boolean('gratuito_modulo');
            $table->string('color_class_modulo', 50);
            $table->string('url_img_modulo', 255);
            $table->string('url_page_modulo');
            $table->timestamp('dataCadastro_modulo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('modulos');
    }
}
