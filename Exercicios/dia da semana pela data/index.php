<?php
    //strtotima(2001-04-29); //-> entrega em milisegundos
    $data = strtotime('31-07-1999');
    $day = Date('N', $data);
    $Dname = '';

    switch($day){
        case 1: 
            $Dname = 'Segunda-feira';
            break;
        case 2: 
            $Dname = 'Terça-feira';
            break;
        case 3: 
            $Dname = 'Quarta-feira';
            break;
        case 4: 
            $Dname = 'Quinta-feira';
            break;
        case 5: 
            $Dname = 'Sexta-feira';
            break;
        case 6: 
            $Dname = 'Sabado';
            break;
        case 7: 
            $Dname = 'Domingo';
            break;
    
    };

    echo "$Dname - ".Date('d/m/Y', $data);