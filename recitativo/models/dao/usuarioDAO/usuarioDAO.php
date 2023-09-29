<?php


require_once '../models/classes/usuario/usuario.php';

class UsuarioDaoMysql implements UsuarioDAO{

    private $pdo;

    public function __construct(PDO $driver){
        $this->pdo = $driver;
    }

    public function add(Usuarios $u){

        $sql = $this->pdo->prepare("INSERT INTO usuarios (nome, turma) VALUES (:nome, :turma)");
        $sql->bindValue(':nome', $u->getName());
        $sql->bindValue(':turma', $u->getTurma());
        $sql->execute();        

    }

    public function findAll(){

    }

    public function findById($id){

    }

    public function update(Usuarios $u){

    }

    public function delete($id){

    }

}
        
   