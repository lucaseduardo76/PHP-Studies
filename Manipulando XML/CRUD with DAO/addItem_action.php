<?php
session_start();
require 'config.php';
require 'classes/Usuarios.php';
require 'dao/UsuarioDaoMySql.php';

$u_dao = new UsuarioDaoXml($pdo); 

$nome = ucwords(strtolower(filter_input(INPUT_POST, 'name')));
$email = ucfirst(strtolower(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)));

if($nome && $email){
    $u = new Usuarios();
    $u->setName($nome);
    $u->setEmail($email);
    
    $u_dao->add($u);

}else{
    header('Location: addItem.php');
    exit;
}

header('Location: index.php');
    exit;

