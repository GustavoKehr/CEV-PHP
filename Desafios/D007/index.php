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
        $sal = $_REQUEST['sal'] ?? $salm;
        $salm = 1380.60;
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h1>Informe seu salário</h1>
        <label for="sal">Salário (R$)
        </label>
        <input type="number" name="sal" id="sal" step="0.01" value="<?=$sal?>" required>
        <p>Considerando o salário mínimo de <strong><?=numfmt_format_currency($padrao, $sal, "BRL")?></strong></p>
        <input type="submit" value="Calcular">
        </form>
        <section>
            <h1>Resultado Final</h1>
            <?php 
                /* CALCULOS */
                $qtsm = $sal/$salm;
                $dif = $sal % $salm;

                print("<p>Quem recebe um sário de " . numfmt_format_currency($padrao, $sal, "BRL") . " ganha <strong>" . (int)$qtsm . " salários mínimos</strong> + " . numfmt_format_currency($padrao, $dif, "BRL") . "</p>");
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