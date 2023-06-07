<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleex005.css">
    <title>Exercicios PHP</title>
</head>
<body>
    <main id="php">
        <pre>
            <?php 
                setcookie("dia-da-semana", "SEGUNDA", time() + 3600);

                session_start();
                $_SESSION["teste"] = "FUNCIONOU!";
            //http://localhost/CEV-PHP/Ex005/superglobais.php?nome=Gustavo&idade=21
                print "<h1>Super Global GET</h1>";
                var_dump($_GET);

                print "<h1>Super Global POST</h1>";
                var_dump($_POST);

                print "<h1>Super Global REQUEST</h1>";
                var_dump($_REQUEST);

                print "<h1>Super Global COOKIE</h1>";
                var_dump($_COOKIE);

                print "<h1>Super Global FILES</h1>";
                var_dump($_FILES);

                print "<h1>Super Global SESSION</h1>";
                var_dump($_SESSION);

                print "<h1>Super Global ENV</h1>";
                var_dump($_ENV);
                // foreach (getenv() as $c => $v) {
                //     print "<br>$c -> $v";
                // }

                // print "<h1>Super Global SERVER</h1>";
                // var_dump($_SERVER);

                // print "<h1>Super Global GLOBALS</h1>";
                // var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>