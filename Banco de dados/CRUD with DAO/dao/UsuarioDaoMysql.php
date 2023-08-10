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
 
        $sql = $this->pdo->prepare("SELECT * FROM musicos where id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();
        
        if($sql->rowCount() > 0){
            $db_u = $sql->fetch();

            $user = new Usuarios();
            $user->setId($db_u['id']);
            $user->setName($db_u['name']);
            $user->setEmail($db_u['email']);

            return $user;
        }
        
        return false;
    }
    public function update(Usuarios $u){
        $sql = $this->pdo->prepare("UPDATE musicos SET name = :name, email = :email WHERE id = :id");
        $sql -> bindValue(':id', $u->getId());
        $sql -> bindValue(':name', $u->getName());
        $sql -> bindValue(':email', $u->getEmail());
        $sql -> execute();
    }
    public function delete($id){
        
        $sql = $this->pdo->prepare("DELETE FROM musicos WHERE `musicos`.`id` = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}