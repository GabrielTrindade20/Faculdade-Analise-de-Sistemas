<?php

    require_once 'pessoa.php';

    $p = new Pessoa("agenda","localhost", "root", "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilo/style.css">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    
    <?php 

    
    if (isset($_POST['nome'])) {

        //VERIFICA SE A PESSOA CLICOU NO BOTÃO CADASTRAR OU NO BOTÃO ATUALIZAR\\
        
        //CLICOU NO BOTÃO EDITAR-----------------------------------------------------------------------------------------
        if(isset($_GET['id_update']) && !empty($_GET['id_update'])){

            $id_upd = addslashes($_GET['id_update']);
            $ds_nome = addslashes($_POST['nome']);
            $cd_sexo = addslashes($_POST['sexo']);
            $data_nasc = addslashes($_POST['data']);
            $nr_tel = addslashes($_POST['telefone']);
            $ds_email = addslashes($_POST['email']);

            //Filtrando variáveis: não consegui

            //chamando funcão
            if (!empty($ds_nome) && !empty($cd_sexo) && !empty($data_nasc) && !empty($nr_tel) && !empty($ds_email)){
                
                //ATUALIZAR
                $p->atualizarDados($id_upd, $ds_nome, $cd_sexo, $data_nasc, $nr_tel, $ds_email);

                //ATUALIZAR A PAGINA
                header("location: index.php");

            } else {
                    ?> 
                        <div class="aviso">
                        <h4>"Preencha todos os campos"</h4>
                        </div>
                    <?php
            }


        //CLICOU NO BOTÃO CADASTRAR-----------------------------------------------------------------------------------------
        } else {

            $ds_nome = addslashes($_POST['nome']);
            $cd_sexo = addslashes($_POST['sexo']);
            $data_nasc = addslashes($_POST['data']);
            $nr_tel = addslashes($_POST['telefone']);
            $ds_email = addslashes($_POST['email']);

            //Filtrando variáveis: não consegui

            //chamando funcão
            if (!empty($ds_nome) && !empty($cd_sexo) && !empty($data_nasc) && !empty($nr_tel) && !empty($ds_email)){
                
                //CADASTRAR
               $p->cadastrarPessoa($ds_nome, $cd_sexo, $data_nasc, $nr_tel, $ds_email);

            } else {
                
                    ?> 
                        <div class="aviso">
                            <h4>"Preencha todos os Campos"</h4>
                        </div>
                    <?php
            }
        }

        
    }

    ?>

    <?php 

        //VERIFICA SE A PESSOA CLICOU NO BOTÃO EDITAR
        if(isset($_GET['id_update'])){
            $id_update = addslashes($_GET['id_update']);
            $res = $p->buscarDadosPessoa($id_update);
            
        }
    
    ?>

    <section id="esquerda">

        <form method="POST">
            <h2>CADASTRAR PESSOA</h2>

            <label for="nome" >Nome</label>
            <input type="text" name="nome" id="nome" value="<?php  if (isset($res)) {echo $res['ds_nome'];}?>">


            <label for="sexo" id="sexo">Sexo:</label>
            <input type="radio" name="sexo" value="M" checked>Masculino
            <input type="radio" name="sexo" value="F">Feminino


            <label for="data">Data de Nascimento:</label>
            <input type="date" name="data" id="data" 
            value="<?php  if (isset($res)) {echo $res['dt_nasc'];} ?>">


            <label for="telefone">Telefone:</label>
            <input type="text" name="telefone" id="Telefone" 
            value="<?php  if (isset($res)) {echo $res['nr_telefone'];} ?>">


            <label for="email">Email</label>
            <input type="email" name="email" id="email" 
            value="<?php  if (isset($res)) {echo $res['ds_email'];} ?>">

            <input type="submit" value="<?php  if (isset($res)) {echo "Atualizar";} else {echo "Cadastrar";}?>">

        </form>
    </section>

    <section id="direita">

    <table>
            <tr id="titulo">
                <td>NOME</td>
                <td>SEXO</td>
                <td>DATA DE NASCIMENTO</td>
                <td>TELEFONE</td>
                <td colspan="3">Email</td>
            </tr>

            <?php
                $dados = $p->buscarDados();

                if(count($dados)> 0){

                    for ($i=0; $i < count($dados) ; $i++) { 

                        echo "<tr>";
                            foreach ($dados[$i] as $k => $v) {

                                if($k != "id_pessoa"){
                                    echo "<td>".$v."</td>";
                                }              
                            }

                        ?>
                            <td>
                                <a href="index.php?id_update=<?php echo $dados[$i]['id_pessoa'];?>">Editar</a>
                                <a href="index.php?id_excluir=<?php echo $dados[$i]['id_pessoa'];?>">Excluir</a>
                            </td>
                            
                        <?php
                        echo "</tr>";
                    }
                } else {
                    ?> 
                        <div class="cadastrar">
                        <h4>"Não há pessoas cadastradas"</h4>
                        </div>
                    <?php
                }

            ?>

        </table>
    </section>


</body>
</html>


<?php

    if (isset($_GET['id_excluir'])) {
        $id_pessoa = addslashes($_GET['id_excluir']);

        $p->excluirPessoa($id_pessoa);
        header("location: index.php");
    }

?>