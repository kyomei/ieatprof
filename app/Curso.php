<?php

namespace ieatprof;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //Nome da tabela.
    protected $table = 'cursos';
    
    //Primary Key da Tabela
    protected $primaryKey = 'id_curso';

    //Deseja trabalhar ou não com campos created_at e updated_at do tipo timestamp nessa tabela.
  //  public  $timestamps   = false;
    
    //Item em um Array que são utilizados para preenchimento da informação.
    protected $fillable   = [
        'nome_curso',
        'descricao_curso',
        'ordem_curso',
        'duracao_automatica_curso',
        'duracao_horas_curso',
        'duracao_meses_curso',
        'situacao',
        'color_class_curso',
        'sigla_curso',
        'thumbnail_curso',
        'slug_curso'
        ];
    
       
    //Relacionamento.
    public function modulos()
    {
        //    $this->belongsToMany('relacao', 'nome da tabela pivot', 'key ref. authors em pivot', 'key ref. books em pivot')
        return $this->belongsToMany('App\Modulo','modulo_has_curso', 'id_curso', 'id_modulo');
    }
}
