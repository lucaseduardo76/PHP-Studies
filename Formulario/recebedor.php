<?php
    $nome = filter_input(INPUT_POST, "nome");
    $idade = filter_input(INPUT_POST, "idade");

    if($nome && $idade){
        echo "$nome tem $idade anos.";
    }else{
        header("Location: index.php");
        exit;
    };