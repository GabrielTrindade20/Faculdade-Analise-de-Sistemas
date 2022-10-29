<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>recebendo dados</title>
        </head>
    <body>

<?php 
    
    //pegando os valores
    $altura1 = $_POST["altura"];
    $peso1 = $_POST["peso"];
    

    //manipulando os dados
    $peso = str_replace(",", ".", $peso1);

    $altura = str_replace(",", ".", $altura1);
    
    // echo "$peso <br>";
    // echo $altura;

    //calculando o IMC
    $imc = $peso/($altura*$altura);

    $situacao = "";


    //definindo a situação da pessoa
    if ($imc < 17){
        $situacao = "Muito abaixo do peso";
        
    } elseif ($imc >= 17 && $imc < 18.5){
        $situacao = "Abaixo do peso";

    } elseif ($imc >= 18.5 && $imc < 25){
        $situacao = "Peso normal";

    } elseif ($imc >= 25 && $imc < 30){
        $situacao = "Acima do peso";

    } elseif ($imc >= 30 && $imc < 35){
        $situacao = "Obesidade I";

    } elseif ($imc >= 35 && $imc <= 40){
        $situacao = "Obesidade II (severa)";
        
    } else {
        $situacao =  "Obesidade III (mórbida)";
    }

    echo "<h4>IMC: $imc </h4>";
    echo "<h4>Situação: $situacao</h4>";
    

    ?>

    <a href="form_imc.php">voltar</a>
    
</body>
</html>