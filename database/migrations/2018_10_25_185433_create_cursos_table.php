<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
           
            // Define o motor do banco
            $table->engine = 'InnoDB';
            
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
            
             //cria duas colunas no banco: create_at e update_at
            $table->timestamps();
            
            // cria uma coluna delete_at, com ela ao invés de apagarmos um registro no banco
            //  quando um usuário deleta sua conta ele altera o status dessa linha do usuário,
            //   mostrando que ele foi deletado sem apagar o seu registro
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
