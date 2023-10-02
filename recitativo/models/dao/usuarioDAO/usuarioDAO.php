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

        $data  = [];

        $sql = $this->pdo->prepare("SELECT * FROM usuarios");
        $sql->execute();

        if($sql->rowCount() > 0){
            $db = $sql->fetchAll(PDO::FETCH_ASSOC);

            foreach($db as $item){
                $u = new Usuarios();
                $u->setId($item['id']);
                $u->setName($item['nome']);
                $u->setTurma($item['turma']);

                $data[] = $u;
            }
            
            return $data;
        }

        return false;

    }

    public function findById($id){
        $sql = $this->pdo->prepare("SELECT * FROM usuario WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $db = $sql->fetch();
            
            $u = new Usuarios();
            $u->setId($db['id']);
            $u->setName($db['name']);
            $u->setTurma($db['Turma']);

            return $u;
        }

        return false;

    }

    public function update(Usuarios $u){
        //UPDATE musicos SET name = :name, email = :email WHERE id = :id

        $sql = $this->pdo->prepare("UPDATE usuarios SET nome = :nome, turma = :turma WHERE id = :id");
        $sql->bindValue(':nome', $u->getName());
        $sql->bindValue(':turma', $u->getTurma());
        $sql->bindValue(':id', $u->getId());
        $sql->execute();


    }

    public function delete($id){

        $sql = $this->pdo->prepare("DELETE FROM usuarios WHERE id = :id");
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

}
        
   