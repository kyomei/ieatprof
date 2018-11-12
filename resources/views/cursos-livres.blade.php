@extends('layouts.principal')

@section('title', 'Cursos livres')

@section('conteudo')
    <h1>Listagem de cursos livres</h1>
    <table class="table table-striped table-bordered table-hover">            
        @foreach ($modulos as $modulo)
            <tr>
                <td>{{ $modulo->nome_modulo }}</td>
                <td><a href="/cursos/cursos-livres/{{ $modulo->slug_modulo }}">Visualizar</a></td>
            </tr>
        @endforeach 
    </table>
@stop