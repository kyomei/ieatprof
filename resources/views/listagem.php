<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cursos Livres</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
    <body>
        <h1>Listagem de cursos livres</h1>
        <table class="table">            
            <?php foreach ($modulos as $modulo) : ?>
                <tr>
                    <td><?= $modulo->nome_modulo ?></td>
                </tr>
            <?php endforeach ?>
        </table>


        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> 
    </body>
</html>
