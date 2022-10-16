<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nome = $_GET["nometxt"];
        $senha = $_GET["senhatxt"];
        $curso = $_GET["cursos"];
        $turno = $_GET["botao"];
        $texto = $_GET["texto"];

        echo "Seus dados estão corretos?<br>$nome<br>$senha<br>";
        echo "Cursos e linguagens:<br>$curso<br>$turno<br>";
        
       
        echo "Sobre você:<br>$texto";
    ?>
</body>
</html>