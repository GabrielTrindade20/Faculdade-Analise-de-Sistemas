<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividades PHP</title>
</head>
<body>
    <h1>Atividade 1</h1>

    <p>Escrever a tabuada de um número passado por parâmetro.</p>
    <?php 
        function tabuada($tabuada){
            $cont = 1;

            while ($cont <= 10) {
                $resultado = $cont * $tabuada;

                echo "$tabuada x $cont = $resultado <br>";
                
                $cont++;
            }
        }

        tabuada(8)
    ?>  


<br>

<h1>Atividade 2</h1>

    <p>Inverter o conteúdo de um vetor qualquer.</p>
    <?php 
       $n = array(1,2,3,4,5);

       $v = array_reverse($n);

       print_r ($v);
    ?>

<br>

<h1>Atividade 3</h1>

    <p>um vetor com números inteiros e que devolva o maior número existente no vetor.</p>
    <?php 
        $n = array(16,8,42,250,50);

        echo " o maior número do vetor é ".max($n);

    ?>

<br>

<h1>Atividade 4</h1>

    <p> formatar um número como CPF</p>
    <?php 
        $numeros = "05861927197";
        echo "Números do CPF: $numeros <br><br>";
        echo "CPF Formatado: ";
    
        function formatCPF($n) {
            $p1 = substr($n,0,3);
            $p2 = substr($n,3,3);
            $p3 = substr($n,6,3);
            $p4 = substr($n,9,2);
            return $formtCPF = "$p1.$p2.$p3-$p4";
        }
    
        echo formatCPF($numeros);
    ?>
</body>
</html>

<br>

<h1>Atividade 5</h1>

<p> Transformar Celsius para Fahrenheit:</p>

    <?php 
       function val($f){
        $c = ($f - 32)/18;
        echo "o valor $f º em Fahrenheit é: ".$c.'<br>';
       }

       val(90);
       val(77);
       val(52);
       val(12);
     
    ?>
</body>
</html>

<br>

<h1>Atividade 6</h1>

<p> função busca Texto:</p>

    <?php 
            $str = "Meu nome é gabriel";

            function buscaTexto($texto, $busca) {
                if (strpos($texto, $busca) !== false) {
                    echo $texto. "<br>";
                    echo "<span>nome</span>";
                }else {
                    echo "Palavra não encontrada!";
                }
            }
        
            buscaTexto($str, 'nome');
        
    ?>

</body>
</html>

<br>

<h1>Atividade 6</h1>

<p> função buscaTexto:</p>

    <?php 
            $numsInt = [2,6,8,15,8,12];

            print_r($numsInt);
            echo "<br>";
            $soma = 0;
            for ($i = 0; $i < 6; $i++) {
                $soma += $numsInt[$i];
            }
        
            echo "Soma deles é  $soma";
        
    ?>

</body>
</html>
