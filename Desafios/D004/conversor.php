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

            //Cotacao vindo da API do Banco Central

            //data atual - 7 dias em PHP, ou seja, pego o dia atual e ele retira 7 dias automaticamente para dar inicio a receber dados de 7 dias antes do inicio do programa
            $ini = date("m-d-Y", strtotime("-7 days"));

            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $ini .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $default = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            $dados = json_decode(file_get_contents($url), true);

            $cota = $dados["value"][0]["cotacaoCompra"];

            /* Quantos R$ vc tem? */
            $brl = $_REQUEST["num"] ?? "[ERRO]";

            /* Equivalencia em dólar */
            $dol = $brl / $cota;

            /* Cotacao atual */
            print "Cotacao Atual: <strong>" . numfmt_format_currency($default, $cota, "USD") . "</strong>";

            /* Conversao */
            print "<br>Seus " . numfmt_format_currency($default, $brl, "BRL") . " valem : <strong>" . numfmt_format_currency($default, $dol, "USD") . "</strong>";

        ?>
    
    <p id="button">
        <br>
        <br>
        <a href="javascript:history.go(-1)">Voltar</a>
    </p>  
    
    </div>
    
</body>
</html>