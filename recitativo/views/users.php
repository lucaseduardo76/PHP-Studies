<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require "../models/classes/usuario/usuario.php";
    require "../models/dao/usuarioDAO/usuarioDAO.php";
    require "../config.php";

    $array = [];

    $sql = new UsuarioDaoMysql($pdo);
    $array = $sql->findAll();
    
    function handle_turma($t){
        if($t == 0){
            return 'Bebês';
        }else if($t == 1){
            return 'Crianças';
        }else if($t == 2){
            return 'Adolecentes';
        }else{
            return "Moços";
        }
    }

    ?>
   
   <table width="50%" border="1">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>TURMA</td>
        <td>AÇÕES</td>
    </tr>
    <?php foreach($array as $usuario): ?>
        <tr>
            <td style="padding:5px;"><?= $usuario->getId(); ?></td>
            <td padding="5px"><?= $usuario->getName(); ?></td>
            <td padding="5px"><?= handle_turma($usuario->getTurma());?></td>
            <td>
                <a href="editar.php?id=<?= $usuario->getId(); ?>">[editar]</a>
                <a href="../actions/delUserAction.php?id=<?= $usuario->getId(); ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>         
</table>


<a href="newUser.php">Adicionar novo usuario</a>
</body>
</html>