<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resumo</title>
</head>
<body>
    <?php

        $um = $_GET["opcao"];
        $dois = $_GET["opcao"];
        $tres = $_GET["opcao"];
        $quatro = $_GET["opcao"];

        if($um == '90'){
            $c = ($um - 32)/18;
            echo "o valor de 90 é $c"
        }           

    ?>
</body>
</html>