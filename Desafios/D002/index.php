<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 2</title>
</head>
<body>
    <div id="d1">
        <h1>Números aleatórios</h1>
        <!-- <p>Gerando um número aleatório entre 0 e 100...</p> -->
        <?php 
            $min = 0;
            $max = 100;
            $num = mt_rand($min, $max);
            print("<p>Gerando um número aleatório entre $min e $max... <br><br>O valor aleatório gerado foi $num")
        ?>
        <button onclick="javascript:document.location.reload()" class="voltar">&#x1F504; Gerar novo número!</button>
    </div>
</body>
</html>