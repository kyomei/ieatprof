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
            
            // Define o motor do banco
            $table->engine = 'InnoDB';
            
            $table->increments('id_modulo');
            $table->string('nome_modulo', 100)->unique();
            $table->longText('descricao_modulo');
            $table->tinyInteger('duracao_horas_modulo')->unsigned();
            $table->tinyInteger('duracao_meses_modulo')->unsigned();           
            $table->boolean('status_modulo');
            $table->boolean('gratuito_modulo');
            $table->string('color_class_modulo', 50);
            $table->string('thumbnail_modulo', 255);
            $table->string('slug_modulo', 255);
            
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
        Schema::dropIfExists('modulos');
    }
}
