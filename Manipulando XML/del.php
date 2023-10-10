<?php

session_start();

$id = filter_input(INPUT_GET, 'id');
   
    
$data = simplexml_load_file('users.xml');
$array=[];

foreach($data->user as $item){


    if($item->id == $id){
        
        $u = ['id' => $item->id, 
                'name' => $item->name, 
                'description' => $item->description];
    
        $array[] = $u;
        $dom = dom_import_simplexml($item);
        $dom->parentNode->removeChild($dom);
        $data->asXML('users.xml');

        echo 'ENTROU AQUI';
    }

    echo $item->id.' - ';
    echo $item->name.' - ';
    echo $item->description.' </br>';

    
}        



header('Location: ler-xml.php');
exit;
/*foreach($array as $u){
     $novoRegistro = $this->xmlFile->addChild('usuario');
     $novoRegistro->addChild('id', $u->getId());
     $novoRegistro->addChild('name', $u->getName());
     $novoRegistro->addChild('email', $u->getEmail());
 
     $this->xmlFile->asXML($this->path);
 }*/
