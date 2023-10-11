<?php
session_start();
require 'config.php';
require 'classes/Usuarios.php';
require 'dao/UsuarioDaoMysql.php';
$u_dao = new UsuarioDaoXml($pdo); 

$name = ucwords(strtolower(filter_input(INPUT_POST, 'name')));
$email = strtolower(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL));
$id = filter_input(INPUT_POST, 'id');

if($name && $email && $id){
    
    $u = new Usuarios();
    $u->setId($id);
    $u->setName($name);
    $u->setEmail($email);

    $u_dao->update($u); 
  
    header('Location: index.php');
    exit;

}else{
    header('Location: editar.php');
    exit;
}

header('Location: index.php');
    exit;

