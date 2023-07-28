<?php
require 'config.php';

$lista = [];
$sql = $pdo->query('SELECT * FROM usuarios');

if($sql->rowCount() > 0){
    $lista = $sql->fetchAll( PDO::FETCH_ASSOC );
}
?>

<a href="addItem.php">Clique aqui para adicionar itens</a>
<table width="50%" border="1">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>
    <?php foreach($lista as $key): ?>
        <tr>
            <td style="padding:5px;"><?= $key["id"] ?></td>
            <td padding="5px"><?= $key["nome"] ?></td>
            <td padding="5px"><?= $key["email"] ?></td>
            <td>
                <a href="editar.php?id=<?= $key["id"] ?>">[editar]</a>
                <a href="excluir.php?id=<?= $key["id"] ?>">[excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>         
</table>