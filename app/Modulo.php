<?php

namespace ieatprof;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    //indica qual a tabela no banco referente a model
    protected $table = 'modulos';
    
    //protected $fillable = ['nome', ...];
    
    public $timestamps = false;
    
    public function produtos(){
        return $this->hasMany(Produto::class);
    }
}
