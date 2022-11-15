<?php

    class Pessoa{

        private $pdo;

        //conexão com o banco de dados
        public function __CONSTRUCT($dbname, $host, $user, $senha){
            
            try {
                $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host, $user, $senha);

            } catch (PDOException $e) {
                echo "erro banco de dados: ".$e->getMessage();
                
            } catch (Exception $e) {
                echo "erro genérico: ".$e->getMessage();
            }

            
    }

        //funcao para cuscar dados e colocar no canto direito da tela
        public function buscarDados(){

            $res = array();

            $cmd = $this->pdo->query("SELECT * FROM tb_pessoa ORDER BY ds_nome");

            $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
            return $res;
        }

        //funcao de cadastrar pessoas no banco de dados
        public function cadastrarPessoa($ds_nome, $cd_sexo, $data_nasc, $nr_tel, $ds_email){

            //Verificar antes de cadastrar, se o email já está cadastrado
            $cmd = $this->pdo->prepare("SELECT id_pessoa FROM tb_pessoa WHERE ds_email = :e");

            $cmd->bindValue(":e", $ds_email);
            $cmd->execute();

            if ($cmd->rowCount() > 0) { //O email já existe
                return false;

            } else { //o email não foi cadastrado
                $cmd = $this->pdo->prepare("INSERT INTO tb_pessoa (ds_nome, cd_sexo, dt_nasc, nr_telefone, ds_email) VALUES (:n, :s, :d, :t, :e)");

                $cmd->bindValue(":n", $ds_nome);
                $cmd->bindValue(":s", $cd_sexo);
                $cmd->bindValue(":d", $data_nasc);
                $cmd->bindValue(":t", $nr_tel);
                $cmd->bindValue(":e", $ds_email);

                $cmd->execute();
                return true;
            }

        }

        //EXCLUIR UMA PESSOA-----------------------------------------------------------------------------------------
        public function excluirPessoa($id){
            $cmd = $this->pdo->prepare("DELETE FROM tb_pessoa WHERE id_pessoa = :id");

            $cmd->bindValue(":id", $id);
            $cmd->execute();
        }

        //  BUSCAR DADOS DE UMA PESSOA-----------------------------------------------------------------------------------------
        public function buscarDadosPessoa($id){

            $res = array();

            $cmd = $this->pdo->prepare("SELECT * FROM tb_pessoa WHERE id_pessoa = :id");

            $cmd->bindvalue(":id",$id);
            $cmd->execute();

            //transformando em array
            $res = $cmd->fetch(PDO::FETCH_ASSOC);
            return $res;
        }


        //ATUALIZAR DADOS NO BANCO DE DADOS-----------------------------------------------------------------------------------------
        public function atualizarDados($id_pessoa, $ds_nome, $cd_sexo, $dt_nasc, $nr_telefone, $ds_email){

                $cmd = $this->pdo->prepare("UPDATE tb_pessoa SET ds_nome = :n, cd_sexo = :s, dt_nasc = :d, nr_telefone = :t, ds_email = :e WHERE id_pessoa = :id");

                $cmd->bindValue(":n", $ds_nome);
                $cmd->bindValue(":s", $cd_sexo);
                $cmd->bindValue(":d", $dt_nasc);
                $cmd->bindValue(":t", $nr_telefone);
                $cmd->bindValue(":e", $ds_email);
                $cmd->bindValue(":id", $id_pessoa);
                $cmd->execute();
        
        }
    }

?>