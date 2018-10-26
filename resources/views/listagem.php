<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cursos Livres</title>
    </head>
    <body>
        <h1>Listagem de cursos livres</h1>
        <ul>
            <?php foreach ($modulos as $modulo) : ?>
                <li><?= $modulo->nome_modulo ?></li>
            <?php endforeach ?>
        </ul>
    </body>
</html>
