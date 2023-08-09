<?php

require_once 'classes/Usuarios.php';


class UsuarioDaoMysql implements UsuarioDAO{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuarios $u){

        $sql = $this->pdo->prepare("INSERT INTO musicos (name, email) VALUES (:name, :email)"); 
        $sql->bindValue(':name', $u->getName());
        $sql->bindValue(':email', $u->getEmail());
        $sql->execute();

    }

    public function findAll(){
        $array = [];
        $sql = $this->pdo->query('SELECT * FROM musicos');

        if($sql->rowCount() > 0){
           $data = $sql->fetchAll();

            foreach($data as $item){
                $u = new Usuarios();
                $u->setId($item['id']);
                $u->setEmail($item['email']);
                $u->setName($item['name']);

                $array[] = $u;
            }        
        }

        return $array;
    }

    public function findById($id){

    }
    public function update(Usuarios $u){

    }
    public function delete($id){
        
        $sql = $this->pdo->prepare("DELETE FROM musicos WHERE `musicos`.`id` = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}