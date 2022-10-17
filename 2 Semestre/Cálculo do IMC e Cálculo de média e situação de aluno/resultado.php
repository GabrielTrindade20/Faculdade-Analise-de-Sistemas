<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
    <body>

<?php 
    
    //pegando os valores
    $name = $_POST["name"];
    $nota1 = $_POST["nota1"];
    $nota2 = $_POST["nota2"];

    //exibindo os valores
    // echo $nota1;
    // echo $nota2;

    //calculando a média aritimética
    $media = ($nota1 + $nota2)/2;

    //exibindo média
    //echo $media;

    //definindo a situação do aluno
    if ($media < 4){
        echo "Reprovado";
        
    } elseif ($media >= 4 && $media < 6){
        echo "Exame final";
        
    } else {
        echo  "Aprovado";
        
    }
    
?>


    </body>
</html>
    