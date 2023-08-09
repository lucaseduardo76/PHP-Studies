<?php
session_start();
require 'config.php';
$nome = ucwords(strtolower(filter_input(INPUT_POST, 'name')));
$email = ucfirst(strtolower(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)));
$id = filter_input(INPUT_POST, 'id');

if($nome && $email && $id){
   

        $up_data = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");

        $up_data -> bindValue(':id', $id);
        $up_data -> bindValue(':name', $nome);
        $up_data -> bindValue(':email', $email);
        $up_data -> execute();
 
 
  
header('Location: index.php');
exit;


}else{
    header('Location: editar.php');
    exit;
}

header('Location: index.php');
    exit;

