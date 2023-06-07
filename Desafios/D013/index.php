<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 13</title>
</head>
<body>
    <?php 
        $saque = $_REQUEST['saque']?? 0;
    ?>
    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="saque">Qual o valor do saque? (R$) <sup>*</sup></label>
        <input type="number" name="saque" id="saque" step="5" required>
        <p style="font-size: 0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
        <input type="submit" value="Sacar">
        </form>
    </main>
    <section>
        <?php 

            $resto = $saque;
            /* saque 100 */
            $tot100 = floor($resto/100);
            $resto %= 100;

            /* saque 50 */
            $tot50 = floor($resto/50);
            $resto %= 50;

            /* saque 20 */
            $tot20 = floor($resto/20);
            $resto %= 20;

            $tot10 = floor($resto/10);
            $resto %=10;

            $tot5 = floor($resto/5);
            $resto %=5;
        ?>
    	<h2>Saque de <?=number_format($saque, 2, ",", ".")?>  realizado</h2>
        <p>O caixa eletronico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="imagens/100-reais.jpg" alt="100-reais" class="nota"> x<?=$tot100?></li>
            <li><img src="imagens/50-reais.jpg" alt="50-reais" class="nota" width="270px"> x<?=$tot50?></li>
            <li><img src="imagens/20-reais.jpg" alt="20-reais" class="nota"> x<?=$tot20?></li>
            <li><img src="imagens/10-reais.jpg" alt="10-reais" class="nota" width="250px"> x<?=$tot10?></li>
            <li><img src="imagens/5-reais.jpg" alt="5-reais" class="nota" width="230px"> x<?=$tot5?></li>
        </ul>
    </section>
</body>
</html>