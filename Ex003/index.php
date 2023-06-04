<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variaveis</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
    /* 0x = hexadecimal 0b = binario 0 = octal */
        // $num = 300;
        // print "O valor da variavel é $num <br>";
        // $numx = 0x1A;
        // print "O valor da variavel HexaDecimal é $numx <br>";
        // $numb = 0b1011;
        // print "O valor da variavel em binario $numb <br>";
        // $numo = 010;
        // print "O valor da variavel em octal $numo"

        /* Testar o tipo primitivo da variavel */
        // $v = 300;
        // var_dump($v);

        $num = (int) 3e2; // 3x10**2
        // print "$num"
        var_dump($num);

        $num1 = (int)"950"; //Coercao, mudança de tipo primitivo
        var_dump($num1);

        $vet = [21, "gustavo", false, 6.5];
        var_dump($vet);

        class Pessoa {
            public string $nome;
        }

        $p = new Pessoa;
        var_dump($p)
    ?>

</body>
</html>
<!-- 
            $nome = "Gustavo";
        // $sobrenome = "Kehr";
        // const pais = "Brazil";
        // //
        // //
        // /
        $nome = "Rafael";
        $sobrenome = "Portugal";

        print "Prazer, $nome $sobrenome!, Voce mora no " . pais; -->