<?php namespace ieatprof\Http\Controllers;

// Classe para acessar metodos do banco de dados
use Illuminate\Support\Facades\DB;

class SiteController extends Controller {
    
    /* Método responsável pela exibição das informações na pág home */
    public function home(){
          $html = '<h1>Página incial</h1>';
          $html .= '<ul>';
          $modulos = DB::select('select * from modulos');
          foreach ($modulos as $modulo){
              $html .= '<li>Modulo: '.$modulo->nome_modulo .'</li>';
          }
          $html .= '</ul>';
          return $html;
    }
    
    /* Método responsável pela exibição das informações na pág quem-somos */
    public function quem_somos(){
        return '<h1>Página quem somos</h1>';
    }
    /* Método responsável pela exibição das informações na pág fale-conosco */
    public function fale_conosco(){
        return '<h1>Página fale-conosco</h1>';  
        
    }
    /* Método responsável pela exibição das informações na pág cursos */
    public function cursos(){
        return '<h1>Página cursos</h1>';
    }
    
    /* Método responsável pela exibição das informações na pág cursos-livres */
    public function cursos_livres(){
        //$html = '<h1>Página cursos livres</h1>';
        $modulos = DB::select('select * from modulos');
        return view('listagem')->with('modulos', $modulos);
    }
    
    /* Método responsável pela exibição das informações na pág pacote-de-cursos */
    public function pacotes_de_cursos(){
          return '<h1>Página pacote de cursos</h1>';
    }
}



