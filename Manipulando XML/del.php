<?php

session_start();

$id = filter_input(INPUT_GET, 'id');
   
    
$data = simplexml_load_file('users.xml');


foreach($data->user as $item){


    if($item->id == $id){
        $dom = dom_import_simplexml($item);
        $dom->parentNode->removeChild($dom);
        $data->asXML('users.xml');

    }
    
}        



header('Location: ler-xml.php');
exit;
