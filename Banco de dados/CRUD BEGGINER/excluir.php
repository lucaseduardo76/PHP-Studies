<?php 
//"DELETE FROM usuarios WHERE `usuarios`.`id` = 11"

session_start();
require 'config.php';
$id = filter_input(INPUT_GET, 'id');

if($id){
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE `usuarios`.`id` = :id");
    $sql -> bindValue(':id', $id);
    $sql -> execute();
}

header('Location: index.php');
    exit;

