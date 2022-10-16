<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo '<h1>For<h1>';

    // for($i=0; $i < 10; $i++){ //estrutura de repetição
    //     if ($i%2==0){//if o resto da divisão for 0, ele é par
    //         echo "<p>$i</p>";//escreve todos os números que o resto é 0
    //     }
    // }

    for($num=1;$num <= 100; $num++){
        if($num%3==0 && $num%5==0){
            echo "<p>PING-PONG<p>";
        } elseif($num%3==0){
            echo "<p>PING<p>";
        } elseif ($num%5==0){
            echo "<p>PONG<p>";
        } else {
            echo "<p>$num<p>";
        }
    } 

    ?>
</body>
</html>