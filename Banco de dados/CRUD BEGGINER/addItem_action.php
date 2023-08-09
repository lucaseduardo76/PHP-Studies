<?php
session_start();
require 'config.php';
$nome = ucwords(strtolower(filter_input(INPUT_POST, 'name')));

$email = ucfirst(strtolower(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)));

if($nome && $email){
   

        $up_data = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:name, :email)");

        $up_data -> bindValue(':name', $nome);
        $up_data -> bindValue(':email', $email);
        $up_data -> execute();
 
 
  

}else{
    header('Location: addItem.php');
    exit;
}

header('Location: index.php');
    exit;

