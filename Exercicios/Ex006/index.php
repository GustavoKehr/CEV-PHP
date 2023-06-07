<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios PHP</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            
        }

        body {
            background-color: black;
            
        }

        main {
            background-color: white;
            padding: 50px;
            border-radius: 10px;
            position: absolute ;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            max-width: max-content;
            max-height: max-content;
        }

        main > form > input[type=number] {
            margin-bottom: 10px;
        }

        input {
            border: 1px solid black;
            border-radius: 10px;
            padding: 10px;
        }

        input[type=submit] {
            margin: auto;
            width: 350px;
            
        }

        input[type=submit]:hover {
            cursor: pointer;
            background-color: black;
            color: white;
        }

        h1 {
            margin-bottom: 50px;
        } 

        section {
            margin-top: 50px;
        }
    </style>
</head>
<body>
    <?php 
        /* Captrando os dados do formulario retroalimentado */
        $v1 = $_REQUEST["v1"] ?? 0;
        $v2 = $_REQUEST["v2"] ?? 0;
        
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <h1>Somador de valores</h1>
            <label for="v1">Valor 1</label>
            <input type="number" name="v1" id="v1" required value="<?=$v1?>">
            <br>
            <label for="v2">Valor 2</label>
            <input type="number" name="v2" id="v2" required value="<?=$v2?>">
            <br>
            <input type="submit" value="Somar">
        </form>
        <section>
        <h2>Resultado da soma &downarrow;</h2>
        <?php 
            $soma = $v1 + $v2;
            print("<br><p><strong>$soma</strong></p>")
        ?>
        </section>
    </main>
    
</body>

</html>