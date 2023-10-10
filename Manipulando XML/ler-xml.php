<?php

//STRING XML
$data = simplexml_load_file('users.xml');


/*foreach($data->user as $item){

    echo '</br></br>ID: ' .$item->id."<br/>";
    echo 'NOME: ' .$item->name."<br/>";
    echo 'EMAIL: ' .$item->description."<br/>";
}*/ 
?>
<table width="50%" border="1">
    <tr>
        <td>ID</td>
        <td>NOME</td>
        <td>EMAIL</td>
        <td>AÇÕES</td>
    </tr>
    <?php foreach($data->user as $item): ?>
        <tr>
            <td style="padding:5px;"><?= $item->id; ?></td>
            <td padding="5px"><?= $item->name; ?></td>
            <td padding="5px"><?= $item->description; ?></td>
            <td>
                <a href="editar.php?id=<?= $item->id; ?>">[editar]</a>
                <a href="del.php?id=<?= $item->id; ?>" onclick="return confirm('Tem certeza que deseja excluir?')">[excluir]</a>
            </td>
        </tr>
    <?php endforeach; ?>         
</table>