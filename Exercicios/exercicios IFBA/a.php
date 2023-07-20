<?php
    session_start();

    $height = filter_input(INPUT_POST, "height", FILTER_SANITIZE_SPECIAL_CHARS);    
    $weight = filter_input(INPUT_POST, "weight", FILTER_SANITIZE_SPECIAL_CHARS);  

