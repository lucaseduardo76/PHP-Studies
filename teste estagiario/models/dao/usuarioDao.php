<?php

require_once 'models/classes/usuario.php';

class UsuarioD implements UsuarioDAO{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuario $u){
        
    }

    public function findAll(){
        $array = [];

        $pdo = $this->pdo->query('SELECT * FROM usuarios');

        if($pdo->rowCount() > 0){
            $data = $pdo->fetchAll();

            foreach($data as $item){
                $u = new Usuario();
                $u->setName($item['nome']);
                $u->setCpf($item['cpf']);
                $u->setBirthdate($item['Birthdate']);

                $array[] = $u;
            }
        }

        return $array;
    }

    public function findById($id){

    }

    public function update(Usuario $u){

    }

    public function delete($id){

    }

    public function findByCpf($cpf){

    }  

    public function findByName($name){

    }

    public function findByBirthdate($date){

    }

}






