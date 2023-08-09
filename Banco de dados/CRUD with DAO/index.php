<?php
require 'config.php';
require 'dao/usuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);
$lista[] = $usuarioDao->findAll();

//$lista = [];
//$sql = $pdo->query('SELECT * FROM usuarios');

//if($sql->rowCount() > 0){
//    $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
//}
?>

<a href="addItem.php">Clique aqui para adicionar itens</a>
<table width="50%" border="1">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td style="padding:5px;"><?= $usuario->getId() ?></td>
            <td padding="5px"><?= $usuario->getName() ?></td>
            <td padding="5px"><?= $usuario->getEmail() ?></td>
            <td>
                <a href="editar.php?id=<?= $usuario->getId() ?>">[editar]</a>
                <a href="excluir.php?id=<?= $usuario->getId() ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>         
</table>