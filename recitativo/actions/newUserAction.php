<?php
session_start();

require '../config.php';
require '../models/classes/usuario/usuario.php';
require '../models/dao/usuarioDAO/usuarioDAO.php';

$userDao = new UsuarioDaoMysql($pdo);

$nome = ucwords(strtolower(filter_input(INPUT_POST, 'name')));
$turma = filter_input(INPUT_POST, 'turma');

if($nome && $turma){

    $u = new Usuarios();
    $u->setName($nome);
    $u->setTurma($turma);
    $userDao->add($u);

}else{
    header('Location: ../index.php');
    exit;
}

header('Location: ../index.php');
exit;