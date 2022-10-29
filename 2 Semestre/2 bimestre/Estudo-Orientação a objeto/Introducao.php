<?php

class Login{
    private $email;
    private $senha;
    private $name;

    public function __construct($email, $senha, $name){
        $this->name = $name;
        $this->setEmail($email);
        $this->setSenha($senha);
    }

    public function getName(){
        return $this->name;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setEmail($e){
        $email = filter_var($e, FILTER_SANITIZE_EMAIL);
        $this->email = $email;
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($s){
        $this->senha = $s;
    }

    public function Logar() {
        if ($this->email == "test@test.com" and $this->senha == "123456"):
            echo "Logado com sucesso!";
        else:
            echo "dados incorretos";

        endif;
    }
}

$logar = new Login("test@test.com", "123456", "Gabriel Rocha");



$logar->Logar();

echo"<br>";

echo $logar->getName(); echo"<br>";
echo $logar -> getEmail(); echo"<br>";
echo $logar -> getSenha();