<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 9</title>
</head>
<body>
    <?php 
        $v1 = $_REQUEST['v1']??'';
        $p1 = $_REQUEST['p1']??'';
        $v2 = $_REQUEST['v2']??'';
        $p2 = $_REQUEST['p2']??'';

    ?>
    <main>
        
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
        <h1>Média Aritiméticas</h1>
        <label for="v1">Valor 1</label>
        <input type="number" name="v1" id="v1" required>
        <label for="p1">Peso 1</label>
        <input type="number" name="p1" id="p1" min="1" required>
        <label for="v2">Valor 2</label>
        <input type="number" name="v2" id="v2" required>
        <label for="p2">Peso 2</label>
        <input type="number" name="p2" id="p2" min="1" required>
        <input type="submit" value="Calcular médias">
        </form>
    </main>
    <section>
        <h2>Cálculo das médias</h2>
        <?php 
            $medias = ($v1+$v2)/2;
            $mediap = ($v1*$p1 + $v2*$p2)/($p1+$p2);
            

            print("<ul> <li><strong>A Média Aritimética Simples</strong> entre os valores é igual a " . $medias ."</li>");
            print("<li><strong>A Média Aritimética Ponderada</strong> com pesos" . $p1 . " e " . $p2 ." é igual a " . $mediap . "</li></ul>")
        ?>
    </section>
</body>
</html>