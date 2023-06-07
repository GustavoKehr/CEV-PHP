<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Bases</title>
</head>
<body>
    <?php 

    // quero que o numero digitado seja convertido da base 8 (Octal) para a base 16 (Hexadecimal)
    $r = base_convert(50, 10, 16);
    print("A resposta é $r");


    // quero que o numero digitado seja convertido da base 10 (Decimal) para a base 2 (Binaria)
    $rb = base_convert(120, 10, 2);
    print "<br>A resposta é $rb"
    ?>
</body>
</html>