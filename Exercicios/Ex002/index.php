<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> PHP </title>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    
</style>
<body>
    <h1>Exemplo de PHP</h1>
    <?php
    /* Para setar para a time zone de onde estou que no caso é GMT-3*/
    date_default_timezone_set("America/Sao_Paulo");
    print "Hoje é dia " . date("d/M/Y");
    print " Hora: " . date("G:i:s")
    ?>
</body>
</html>