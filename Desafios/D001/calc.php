<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio 1</title>
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php
            $num = $_REQUEST["num"] ?? "[ERRO]";
            $ant = $num - 1;
            $suc = $num + 1;
            print("<p>Número escolhido: <strong>$num</strong><br>
                    O seu antecessor é $ant<br>
                    O seu sucessor é $suc</p>");
        ?>
        <p class="voltar"><a href="javascript:history.go(-1)">Página anterior</a></p>
    </main>
</body>
</html>