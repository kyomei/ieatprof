<?php

namespace ieatprof;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //indica qual a tabela no banco referente a model
    protected $table = 'modulos';
    
    //Primary Key da Tabela.
    protected $primaryKey = 'id_modulo';
    
    //fillable define quais os campos que podem ser inseridos pelo usuário do sistema no Banco
    protected $fillable = [
        'nome_modulo', 
        'descricao_modulo', 
        'duracao_horas_modulo', 
        'duracao_meses_modulo', 
        'status_modulo', 
        'gratuito_modulo', 
        'color_class_modulo', 
        'thumbnail_modulo', 
        'slug_modulo'
        ];
    
    //Deseja trabalhar ou não com campos created_at e updated_at do tipo timestamp nessa tabela.
    //public  $timestamps   = false;  
    
    //Relacionamento muitos para muitos
    public function cursos(){
        return $this->belongsToMany('App\Curso','modulo_has_curso', 'id_modulo', 'id_curso');
    }
}
