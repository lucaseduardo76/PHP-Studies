<?php 
//"DELETE FROM usuarios WHERE `usuarios`.`id` = 11"

session_start();
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuario_dao = new UsuarioDaoMysql($pdo);
$id = filter_input(INPUT_GET, 'id');

if($id){
    $usuario_dao->delete($id);
}

header('Location: index.php');
    exit;

