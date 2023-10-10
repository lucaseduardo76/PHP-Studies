<?php

//STRING XML
$data = simplexml_load_file('aquivo.xml');


foreach($data as $item){

    if($item->id == 10){
    echo $item->id. 'asdsdgdgfdgfdgfsd';
    }
}
echo '</br></br>ID: ' .$data->user->id."<br/>";
echo 'NOME: ' .$data->user->nome."<br/>";
echo 'EMAIL: ' .$data->user->email."<br/>";