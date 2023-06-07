<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 11</title>
</head>
<body>
    <?php 
        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        $preco = $_REQUEST['preco'] ?? 0;
        $percentual = $_REQUEST['perc'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Reajustador de Preços</h1>
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" required>
            <label for="perc">Qual será o percentual de reajuste?</label>
            <input type="number" name="perc" id="perc" required>
            <input type="submit" value="Reajustar">
        </form>
        <section>
            <?php 
                $reajuste = $percentual*$preco/100 + $preco;
                print("O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . " com <strong>" . number_format($percentual, 2, ",", ".") . "% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $reajuste, "BRL") . "</strong> a partir de agora.");
            ?>
        </section>
    </main>
</body>
</html>