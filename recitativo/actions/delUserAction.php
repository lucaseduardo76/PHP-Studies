<?php
session_start();

require '../config.php';
require '../models/classes/usuario/usuario.php';
require '../models/dao/usuarioDAO/usuarioDAO.php';

$userDao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_GET, 'id');


if($id){
    $userDao->delete($id);
}else{
    header('Location: ../index.php');
    exit;
}

header('Location: ../index.php');
exit;