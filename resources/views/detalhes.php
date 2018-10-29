@extends('principal');

@section('conteudo')
<pre><?= print_r($p); ?></pre>
<h1>Detalhes do produto: <?= $p->nome_modulo ?></h1>
<ul>
    <li><b>Valor:</b> R$ <?= $p->descricao_modulo ?></li>
    <li><b>Descrição:</b> R$ <?= $p->duracao_meses_modulo ?></li>
    <li><b>Quantidade de horas:</b> R$ <?= $p->duracao_horas_modulo ?></li>
</ul>

@stop