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