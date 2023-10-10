<?php
$xmlFile = 'dados.xml';

//CREATE
$xml = simplexml_load_file($xmlFile);
$novoRegistro = $xml->addChild('registro');
$novoRegistro->addChild('campo1', $campo1);
$novoRegistro->addChild('campo2', $campo2);
$xml->asXML($xmlFile);

 ?>

// READ
 <?php
 $xmlFile = 'dados.xml';
 $xml = simplexml_load_file($xmlFile);
 $registros = $xml->registro;
 
 foreach($registros as $item){
    echo  'Campo 1: '. $item->campo1.'<br>';
    echo 'Campo 2: '. $itm->campo2 .'<br>';
 }
 
 ?>

// UPDATE
<?php

$xml = simplexml_load_file($xmlFile);
$xml->registro[$id]->campo1 = $campo1;
$xml->registro[$id]->campo2 = $campo2;
$xml->asXML($xmlFile);

?>

// DELETE

<?php
$xml = simplexml_load_file($xmlFile);
unset($xml->registro[$id]);
$xml->asXML($xmlFile);
?>