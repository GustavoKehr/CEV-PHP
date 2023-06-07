<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 7</title>
</head>
<body>
    <?php 
        $num = $_REQUEST['num'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h1>Informe um Número</h1>
        <label for="num">Número</label>
        <input type="number" name="num" id="num" step="0.01" required>
        <p><strong></strong></p>
        <input type="submit" value="Calcular Raízes">
        </form>
        <section>
            <h1>Resultado Final</h1>
            <?php 
                print("<p>Analisando o <strong>número " . $num . "</strong> , temos:</p>");
                print("<ul><li>A sua raiz quadrada é <strong> " . number_format(sqrt($num), 3, ",", ".") . " </strong></li>");
                print("<li>A sua raiz cúbica é <strong> " . number_format(pow($num, 1/3), 3, ",", ".") . "</strong></li></ul>");
            ?>
        </section>
        <p id="button">
        <br>
        <br>
        <a href="javascript:window.location.reload()">Voltar</a>
    </p>  
    </main>
</body>
</html>