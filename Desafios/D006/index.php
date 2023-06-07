<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 05</title>
</head>
<body>
    <?php 
        $dividendo = $_REQUEST["d1"] ?? 0;
        $divisor = $_REQUEST["d2"] ?? 1;
    ?>
    <main>
        <form action="<?=$_SERVER
        ['PHP_SELF']?>" method="post">
        <h1>Anatomia de uma Divisão</h1>
        <label for="d1">Dividendo</label>
        <input type="number" name="d1" id="d1" value="<?=$dividendo?>">
        <br>
        <label for="d2">Divisor</label>
        <input type="number" name="d2" id="d2" value="<?=$divisor?>" min="1">
        <input type="submit" value="Calcular">
        </form>
        <section>
            <h2>Estrutura da Divisão</h2>

            <?php 
                /* CALCULOS */
                $quociente = intdiv($dividendo, $divisor);
                $resto = $dividendo % $divisor;

            ?>

            <table class="divisao">
                <tr>
                    <td><?=$dividendo?></td>
                    <td><?=$divisor?></td>
                </tr>
                <tr>
                    <td><?=$quociente?></td>
                    <td><?=$resto?></td>
                </tr>
            </table>
        </section>
    </main>
</body>
</html>