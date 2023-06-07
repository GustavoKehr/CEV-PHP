<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Desafio PHP 10</title>
</head>
<body>
    <?php 
        $nasc = $_REQUEST['anoN'] ?? 0;
        $qano = $_REQUEST['idadeAno'] ?? 0;
        $anoA = date('Y')
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <label for="anoN">Em que ano vc nasceu?</label>
        <input type="number" name="anoN" id="anoN">
        <label for="idadeAno">Quer saber sua idade em que ano? (Atual: <strong><?=$anoA?></strong>)</label>
        <input type="number" name="idadeAno" id="idadeAno">
        <input type="submit" value="Qual será minha idade?">
        </form>
        <section>
            <h2>Resultado &downarrow;</h2>
            <?php 
                $fut = $qano - $nasc;
                print("<p>Quem nasceu em " . $nasc . " vai ter <strong>" . $fut . " anos </strong> em " .$qano . "!</p>");
            ?>
        </section>
    </main>
</body>
</html>