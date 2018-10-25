<?php namespace ieatprof\Http\Controllers;

class SiteController extends Controller {
    
    /* Método responsável pela exibição das informações na pág home */
    public function home(){
          return '<h1>Página incial</h1>';
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
        return '<h1>Página cursos livres</h1>';
    }
    
    /* Método responsável pela exibição das informações na pág pacote-de-cursos */
    public function pacotes_de_cursos(){
          return '<h1>Página pacote de cursos</h1>';
    }
}



