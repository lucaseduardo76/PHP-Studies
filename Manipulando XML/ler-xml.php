<?php

//STRING XML
$data = simplexml_load_file('aquivo.xml');

echo 'ID: ' .$data->user0->id."<br/>";
echo 'NOME: ' .$data->user0->nome."<br/>";
echo 'EMAIL: ' .$data->user0->email."<br/>";