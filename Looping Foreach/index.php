<?php
    $ingredientes = [
        'ovo',
        'oleo',
        'massa',
        'farinha',
        'fome',
'carne'
    ];

    foreach($ingredientes as $item){
        echo "Item: ".$item."<br/>";
    } 
    echo "<br/> <br/>";
    foreach($ingredientes as $chave => $valor){
        echo "O item $valor está na posição: $chave </br>";
    }