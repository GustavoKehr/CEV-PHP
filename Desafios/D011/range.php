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
        $reaj = $_REQUEST['reaj'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <h1>Reajustador de Preços</h1>
            <label for="preco">Preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" required>
            <label for="reaj">Qual será o percentual de reajuste? (<strong><span id="p">?</spam>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="0">
            <input type="submit" value="Reajustar" >
        </form>
        <section>
            <?php 
                $aum = $reaj*$preco/100 + $preco;
                print("O produto que custava " . numfmt_format_currency($padrao, $preco, "BRL") . " com <strong>" . number_format($reaj, 2, ",", ".") . "% de aumento</strong> vai passar a custar <strong>" . numfmt_format_currency($padrao, $aum, "BRL") . "</strong> a partir de agora.");
            ?>
        </section>
        <script>
                mudaValor()

                function mudaValor() {
                    p.innerText = reaj.value
                }
        </script>
    </main>
</body>
</html>