<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModuloHasCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo_has_curso', function (Blueprint $table) {
           $table->increments('id_curso', 11);
            $table->string('nome_curso', 100)->unique();
            $table->longText('descricao_curso');
            $table->tinyInteger('ordem_curso')->unsigned();
            $table->boolean('duracao_automatica_curso');            
            $table->tinyInteger('duracao_horas_curso')->unsigned();
            $table->tinyInteger('duracao_meses_curso')->unsigned();           
            $table->boolean('situacao');
            $table->string('color_class_curso', 50);
            $table->string('sigla_curso', 20);
            $table->string('url_img_curso', 255);
            $table->string('url_page_curso', 255);
            $table->timestamp('dataCadastro_curso');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // se tabela existir exclua
        Schema::dropIfExists('modulo_has_curso');
    }
}
