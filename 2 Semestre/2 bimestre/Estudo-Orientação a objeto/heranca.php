<?php

class animais {
    public $nascem;
    public $crescem;
    public $reproduzem;
    public $morrem;

    public function comem(){
        echo "comem:";
    }

    public function dormem(){
        echo "dormem:";
    }
}

    
    class Mamiferos extends animais{

        public function folha(){
            echo "animais que só comem plantas";
        }

    }

    class Carnivoros extends animais{

        public function carne(){
            echo "animais que comem carne";
        }

    }

$Mamiferos = new animais();

$Mamiferos->nascem = "dia do nascimento"."<br>";
$Mamiferos->crescem = "desenvolvimento do animal"."<br>";
$Mamiferos->reproduzem = "reprodução do animal<br>";
$Mamiferos->morrem = "fim da vida(cico da vida)<br>";

$Mamiferos->comem(); 
$Mamiferos -> folha(); 
var_dump($Mamiferos); 


$Carnivoros = new animais();

$Carnivoros->nascem = "dia do nascimento <br>";
$Carnivoros->crescem = "desenvolvimento do animal<br>";
$Carnivoros->reproduzem = "reprodução do animal<br>";
$Carnivoros->morrem = "fim da vida(cico da vida)<br>";

$Carnivoros->dormem(); 
$Carnivoros->carne(); 
var_dump($Carnivoros);