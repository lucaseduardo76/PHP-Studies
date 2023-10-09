<?php

//INSTANCIA DO XML
$dom = new DOMDocument ('1.0', 'UTF-8');

//FORMATA A SAIDA DO XML
$dom->formatOutput = true;


//NÓ D ID DE USUARIO
$idNodeValue = $dom->createTextNode(10);
$idNode = $dom->createElement('id');
$idNode->appendChild($idNodeValue);

//NÓ D NAME DE USUARIO
$nomeNodeValue = $dom->createTextNode('Lucas Eduardo Souza da Silva');
$nomeNode = $dom->createElement('nome');
$nomeNode->appendChild($nomeNodeValue);

//NÓ D EMAIL DE USUARIO
$emailNodeValue = $dom->createTextNode('lucas@gmail.com');
$emailNode = $dom->createElement('email');
$emailNode->appendChild($emailNodeValue);

//NÓ DE USUARIO
$array = [];
for($i = 0; $i <= 0; $i++){
    $userNode = $dom->createElement('user'.$i);
    $userNode->appendChild($idNode);
    $userNode->appendChild($nomeNode);
    $userNode->appendChild($emailNode);

    $array[] = $userNode;
};
print_r($array);
//INSTANCIA DO NÓ ROOT - NÓ PRINCIPAL
$rootNode = $dom->createElement('root');
foreach($array as $item){
    $rootNode->appendChild($item);
}

$dom->appendChild($rootNode);



//IMPRIM O XML NA TELA
//echo $dom->saveXML(); 

//SALVA CONTEUDO EM UM ARQUIVO

$dom->save('aquivo.xml');


