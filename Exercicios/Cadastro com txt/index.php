<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
   
    <form action="Validator.php" method="POST">

        <label>
            Novo nome: 
            <br/>
            <input type="text" name="name">
            
            <button type="submit" style='cursor: pointer;'>Cadastrar</button>
        </label>

    </form>

    <div>
        <h2>Lista de nomes:</h2>

        <div class="box-names">
            <ul>
                <?php
                    if(file_exists('cads.txt')){
                        echo file_get_contents('cads.txt');
                    }                   
                ?>
            </ul>
        </div>

        <br/>

        <a href="delList.php"><h3>Clique aqui para excluir tudo!</h3></a>

    </div>
</body>
</html>