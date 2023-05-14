<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What is Your Name?</title>
</head>
<body>
    <?php 
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);

        if($name){
            
            echo "<h1> Olá, ". ucfirst($name) ." - <a href='login.php'>Sair</a> </h1>";
        }else{
            header('location: login.php');
            exit;
        }
    ?>
    
</body>
</html>