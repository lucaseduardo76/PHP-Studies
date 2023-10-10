<?php
session_start();
$id = filter_input(INPUT_GET, 'id');
$name = filter_input(INPUT_GET, 'name');
$desc = filter_input(INPUT_GET, 'desc');
$xml = simplexml_load_file('users.xml');


if($id && $name && $desc){
    $newItem = $xml->addChild('user');
    $newItem->addChild('id', $id);
    $newItem->addChild('name', $name);
    $newItem->addChild('description', $desc);

    $xml->asXML('users.xml'); // Salva as alterações no arquivo XML
}


header('Location: readXml.php');
exit;