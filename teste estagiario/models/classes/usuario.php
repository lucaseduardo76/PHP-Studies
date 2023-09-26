<?php

class Usuario {    
    private $name;
    private $cpf;
    private $birthdate;

    public function getName(){
        return $this->name;
    }

    public function setName($n){
        $this->name = $n;
    }

    public function getcpf(){
        return $this->cpf;
    }

    public function setCpf($n){
        $this->cpf = $n;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function setBirthdate($n){
        $this->name = $n;
    }
}

interface UsuarioDAO {
    public function add(Usuario $u);
    public function findAll();
    public function findById($id);
    public function update(Usuario $u);
    public function delete($id);
    
    public function findByCpf($cpf);    
    public function findByName($name);
    public function findByBirthdate($date);

}