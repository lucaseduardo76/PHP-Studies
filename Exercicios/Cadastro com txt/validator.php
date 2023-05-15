<?php
    session_start();

    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);  

    if($name){
        strtolower($name);
        ucfirst($name);

        $text = file_get_contents('cads.txt');


        file_put_contents('cads.txt', $text.'<li>'.ucfirst(strtolower($name)).'</li>');
        
    };

    header('location: index.php');
    exit;
    
    