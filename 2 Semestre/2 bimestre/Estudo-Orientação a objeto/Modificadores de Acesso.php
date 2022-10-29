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
