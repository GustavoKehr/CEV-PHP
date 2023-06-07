<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylephp.css">
    <title>Desafio PHP 1</title>
</head>
<body>
    <div id="d1">
        <h1>Conversor de Moedas</h1>
        <?php

            function formatar($num) {
                return number_format($num / 100, 2, '.', '');
            
            }
            $brl = $_REQUEST["num"] ?? "[ERRO]";
            $dol = $brl / 4.96;;
            $cota = 4.96;
            //print"<p>Seus R\$" . number_format($num, 2, ",", ".") . " equivalem a US\$" . number_format($dol, 2, ",", ".");


            //formatacao de moedas com internacionalizacao
            // Biblioteca intl (Internallization PHP)
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            print"<p>Seus " . numfmt_format_currency($padrao, $brl, "BRL") . " equivalem a <strong> " . numfmt_format_currency($padrao, $dol, "USD ") . "</strong></p>";

            print("<p><br>* <strong>Cotação fixa de R$ 4,96</strong> informada diretamente no código.</p>")
            
        ?>
    
    <p id="button">
        <br>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </p>  
    
    </div>
    
</body>
</html>