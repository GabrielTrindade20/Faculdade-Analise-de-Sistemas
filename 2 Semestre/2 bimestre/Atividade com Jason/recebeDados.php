   
    <?php
        //Receber os valores
        //Armazenar em variaveis
        $nome = $_POST["name"];
        $genero = $_POST["botao"];
        $d_nasc = $_POST["date"];
        $telefone = intval($_POST["phone"]);
        $email = $_POST["email"];


        //Filtrar e validar as variaveis

        //NOME
        $filt_nome = filter_var($nome, FILTER_SANITIZE_STRING);
        
        //GENERO
        $opcoes_gen = ['Masculino','Feminino','N/I']; //array com as opocoes do formulario
        if (in_array($genero, $opcoes_gen)){
            $filt_genero = filter_var($genero, FILTER_SANITIZE_STRING);; 
            //echo"genero recebido";
        }else{
           // echo "genero NAO compativel";
        }
        
        //DATA
        $array_d_nasc = date_parse($d_nasc); //Separar em array com indice Ano - Mes - Dia
        //echo gettype($array_d_nasc['year']); // TESTE
        if (checkdate($array_d_nasc['month'], $array_d_nasc['day'], $array_d_nasc['year'])){ // checa de o formato da data e valida (observar a ordem dos parametros da funcao)
            $filt_d_nasc = filter_var($d_nasc, FILTER_SANITIZE_STRING);
            //echo "Data recebida";
        } else {
            echo"Data NAO recebida";
        }
        //print_r($array_d_nasc);

        //TELEFONE
        if (!filter_var($telefone, FILTER_VALIDATE_INT) === false){
            //echo"valido";
            $filt_telefone = $telefone;
        }else{
            //echo "NAO valido";
        }

        //EMAIL

        $email = filter_var($email, FILTER_SANITIZE_EMAIL); // FILTRAR
        if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //echo"email valido";
            $filt_email = $email;
        }else{
            //echo"email NAO valido";
        }


        //JSON

        //Por nossas informacoes em um array
        $array_info = [$filt_nome, $filt_genero, $filt_d_nasc, $filt_telefone, $filt_email];
        

        //encodificar para JSON
        $info = json_encode($array_info);


        //Criar uma variavel com o arquivo.txt. Se ele nao existir, ele cria um
        $arquivo = "Arquivo.txt";

        //Abrir o arquivo
        $op = fopen($arquivo, 'w'); //PAR 1 - O arquivo (neste caso em uma variavel / PAR 2 - Parametro modo ('a+' significa para leitura e escrita))

        //Acrescentar informacoes ao arquivo, com nossa variavel codificada em JSON
        fwrite($op, $info.chr(13).chr(10)); //PAR1 - Arquivo aberto / PAR2 - o texto que quer acrescentar (neste caso, em uma variavel) -- chr(13) e chr(10) - Caracteres que fazem quebra de linha!!

        //fechar o arquivo
        fclose($op);


        //Fechou!
        echo"Arquivo criado e salvo.<br><br>";
