<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Primeiro programa</h1>

    <?php
        $nome = $_GET["nome"];
        $curso = $_GET["curso"];

        if($nome=='gab'){
            echo "Seu nome é o mesmo do meu <br>";
        } else {
            echo "Nome diferente <br>";
        }

        if($curso == "ADS"){
            echo "Você faz curso de ADS <br>";
        } else {
            echo "Voçê faz curso de GTI <br>";
        }
    ?>
    </body>
</html>