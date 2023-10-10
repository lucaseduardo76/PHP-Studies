<?php


$xml = simplexml_load_file('users.xml');
//CRUD - UPDATE
$idToUpdate = 1;
$newName = 'Updated Item 2';

foreach ($xml->user as $item) {
    
        $item->name = $newName;
     
}



header('Location: readXml.php');
exit;