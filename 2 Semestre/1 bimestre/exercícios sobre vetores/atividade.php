<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios sobre vetores</title>
</head>
<body>

    <h1>Arrays multidimensionais</h1>    

    <?php 

        $x[0][0]=15;
        $x[0][1]=6;
        $x[1][0]=2;
        $x[1][1]=5;
        
        foreach($x as $v)
            echo $v."<br>";
        
    ?>

<br>

        <h1>Exercício 2</h1>
        <table border="1"><tr>
    <?php 

        $x[0][0]=15;
        $x[0][1]=6;
        $x[1][0]=2;
        $x[1][1]=5;

        foreach($x as $v)
            foreach ($v as $z)
                echo "<td>".$z
            
?>

        </table>

<br>

    <h1>Exercício 3</h1>

    <table border="1"><tr>
    <?php 

        $x[0]["nome"]="gabriel";
        $x[0]["idade"]=20;
        $x[1]["nome"]="eduardo";
        $x[1]["idade"]=17;

        foreach($x as $v)
            foreach ($v as $z)
                echo "<td>".$z;
            
?>
    </table>
<br>

    <h1>Exercício 4</h1>

        
        <?php 

            $x[0]["nome"] = "gabriel";
            $x[0]["idade"] = 20;
            $x[1]["nome"] = "eduardo";
            $x[1]["idade"] = 17;

            foreach($x as $i => $v)
                foreach ($v as $j => $z)
                    echo $i." - ".$j." - ".$z;
                
    ?>

<br>

<h1>Exercício 5</h1>

        
<?php 

    $x[0]["nome"] = "gabriel";
    $x[0]["idade"] = 20;
    $x[1]["nome"] = "eduardo";
    $x[1]["idade"] = 17;
    $x[2]["nome"] = "gisele";
    $x[2]["idade"] = 13;
    
    $i = -1;
    $c = -1;

    foreach($x as $id => $s){
        if($s["idade"]>$i){
            $i = $s["idade"];
            $c = $id;
        }
    }

        echo $x[$c]["nome"];
?>

<br>

<h1>Exercício 5</h1>

        
<?php 

    $p[] = "gabriel";
    $p[] = "newton";
    $p[] = "eduardo";
    $p[] = "glaucia";
    $p[] = "gisele";
    $p[] = "saulo";
    
    $quant = count($p);
        echo "Quant: ".$quant."<br>";
        unset($p[2]);
            foreach($p as $s){
                echo $s."<br>";
            }
                
            $v = array_unique($p);
                foreach($v as $r){
                    echo $r."<br>";
            }

?>

<br>


            <h1>Exercício 6</h1>
<?php 

    $cidades = "Bento Gonçalves, Garibaldi,Caxias do Sul, Farroupilha, Barão";
    $lista = explode(".", $cidades);
            foreach($lista as $i){
                echo $i."<br>";
            }

    $outras[] = "Salvador do Sul";
    $outras[] = "Cotiporã";
    $junta = array_merge($lista, $outras);
            foreach($junta as $j){
                echo $j."<br>";
            }

    echo count($junta)."<br>";
    sort($junta);

    $chave = array_search("Farroupilha", $junta);
            echo $chave."<br>";

    $tem = in_array("Cotiporã", $junta);
            echo $tem."<br>";
?>
</body>
</html>