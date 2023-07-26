<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        require 'a.php';
    ?>
</head>
        
<body>
   
    
    <form action="algorith.php" method="POST">
        <label>    
            <h2>Digite a sua altura:</h2>   
            </br>  
            <input type="number" name="height"/>
        </label>
        </br>
        <label>    
            <h2>Digite seu peso:</h2>   
            </br>  
            <input type="number" name="weight"/>
        </label>
    </form>

    </br>
    </br>

    <?php
        if($validation){        
            echo "<h4>Você está ...</h4></br>".$height;
            echo "<h4>O seu Imc atual é:</h4>".$weight;    
        }
    ?>

    <a href="algorith.php">CLIQUE AQUI PARA CONFERIR</a>
</body>
</html>