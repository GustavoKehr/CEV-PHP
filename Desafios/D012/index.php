<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 12</title>
</head>
<body>
    <?php 
        $total = $_REQUEST['qtSegundos'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h1>Calculadora de Tempo</h1>
        <label for="qtSegundos">Qual é o total de segundos?</label>
        <input type="number" name="qtSegundos" id="qtSegundos" min="0" step="1">
        <input type="submit" value="Calcular">
        </form>
    </main>
    <section>
        <h2>Totalizando tudo</h2>
        <?php 
            $sobra =  $total;
            //total de semanas
            $sem = (int)($sobra/604800);
            $sobra = $sobra % 604800;
            /* total de dias */
            $dia = (int)($sobra / 86400);
            $sobra = $sobra % 86400;
            /* total de hroas */
            $hora = (int)($sobra/3600);
            $sobra = $sobra % 3600;
            /* total de minutos */
            $min = (int)($sobra/60);
            $sobra = $sobra % 60;
            /* total de segundos */
            $seg = $sobra;

            print("<p>Analizando o valor que voce digitou, <strong> " . number_format($total, 0, ",", ".") . " segundos </strong> equivalem a um total de :</p>");
            print("<ul><li>". $sem ." semanas</li>");
            print("<li>". $dia." dias</li>");
            print("<li>". $hora . " horas</li>");
            print("<li>" . $min . " minutos</li>");
            print("<li>" . $seg . " segundos</li></ul>");
            
        ?>
    </section>
</body>
</html>