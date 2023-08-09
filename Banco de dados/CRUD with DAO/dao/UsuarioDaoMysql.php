<?php

require_once '../classes/Usuarios.php';

class UsuarioDaoMysql implements UsuarioDAO{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuario $u){

    }
    public function findAll(){
        $array = [];

        $sql = $pdo->query('SELECT * FROM usuarios');

        if($sql->rowCount() > 0){
            $sql->fetchAll();

            foreach($sql as $item){
                $u = new Usuarios();
                $u->setId($item['id']);
                $u->setEmail($item['email']);
                $u->setName($item['nome']);

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

}