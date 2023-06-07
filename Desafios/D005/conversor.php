<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>Números Reais</title>
</head>
<body>
    <div id="d1">
        <h1>Analisador de Número Real</h1>
        <?php
            $real = $_REQUEST["num"] ?? 0;

            print "<p>Analisando o número <strong>" . number_format($real, 3, ",", ".") . "</strong> informado pelo úsuario: </p>";

            $int = (int)$real;
            $fra = $real - $int;

            print "<br><ul><li>  A parte inteira do número é <strong>" . number_format($int, 0, ",", ".") ."</strong></li></ul>";

            print "<br><ul><li> A parte real do número é <strong>" . number_format($fra, 3, ",", ".") . "</strong></li></ul>"

        ?>
        <p id="button">
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </p>  
    </div>
</body>
</html>