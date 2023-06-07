<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Cadastro concluido com sucesso!</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"] ?? "nome";
            $snome = $_REQUEST["snome"] ?? "sobrenome";
            print "Prazer em te conhecer <strong>$nome $snome</strong>, este é meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Página anterior</a></p>
    </main>
</body>
</html>