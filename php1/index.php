<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $lista = [
            $nome = 'Lucas',
            $atributos = [
                $forca = 60,
                $agilidade = 80,
                $destreza = 50
            ],
            $vida = 1000,
            $mana = 928
        ];          
        

        echo "NOME: $lista[0]"."<br/>";
        echo "FORÇA: ".$lista[1][0]."<br/>";
        echo "VIDA: ".$lista[2];
    ?>
</body>
</html>