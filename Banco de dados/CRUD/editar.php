<?php 
    require 'config.php';
    
    $id = filter_input(INPUT_GET, 'id');
    $info = [];

    if($id){
        $sql->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if(sql-rowCount() > 0){
            echo "FUNFOU";
        }
    }
    ?>

<form action="addItemConfig.php" method="post">

<label>
    Digite o nome:
    <br/>
    <input type="text" name='name'>
</label>
<br/>
<br/>
<label>
    Digite o nome:
    <br/>
    <input type="email" name='email'>
</label>
<br/>
<input type="submit">

</form>