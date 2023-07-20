<?php

class Calculadora{
    public float $number = 0;
    
    public function add($n){
        $this->number += $n;
    }

    public function sub($n){
        $this->number -= $n;
    }

    public function multiply($n){
        $this->number = $this->number * $n;
    }

    public function divide($n){
        $this->number = $this->number / $n;
    }

    public function clear(){
        $this->number = 0;
    }

    
}

$calc = new Calculadora();
$calc->add(12);
$calc->add(2);
$calc->sub(1);
$calc->multiply(3);
$calc->divide(2);
$calc->add(0.5);


echo $calc->number;

$calc->clear();