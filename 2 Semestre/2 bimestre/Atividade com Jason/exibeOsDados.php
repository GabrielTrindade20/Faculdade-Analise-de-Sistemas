<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebendo dados</title>
</head>
<body>
    
    <?php 

    //abrindo o arquivo
    $arquivo = fopen('Arquivo.txt','r'); 
    
    //pega as informações contidas no arquivo
    $dados = fgets($arquivo);
  
    //fecha o arquivo
    fclose($arquivo);

   

    //decodificando o arquivo
    $decodeArquivo = json_decode($dados);

    //echo $decodeArquivo;
    //transformando o txt em string
    //$array = explode(", ", $decodeArquivo);
    
    $criandoTabela = "<table border =1><tr><th>Nome</th><th>Genero</th><th>Data Nascimento</th><th>Telefone</th><th>E-mail</th></tr><tr>";

    $fimTabela = "</tr></table>";

    echo $criandoTabela;
    foreach($decodeArquivo as $i){
        echo "<td>$i</td>";
    }
    echo "$fimTabela";

    //echo $decodeArquivo;

    ?>

</body>
</html>


    


