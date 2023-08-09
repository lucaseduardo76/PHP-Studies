<?php 
    require 'config.php';
    
    $id = filter_input(INPUT_GET, 'id');
    $info = [];

    if($id){
        $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
        $sql->bindValue(":id", $id);
        $sql->execute();

        if($sql->rowCount() > 0){
            $info = $sql->fetch(PDO::FETCH_ASSOC);
            $current_name = $info["nome"];
            $current_email = $info["email"];
        }else{
            header("Location: index.php");
            exit;
        }
    }else{
        header("Location: index.php");
        exit;
    };
    ?>

<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?= $id ?>">

<label>
    Digite o nome:
    <br/>
    <input type="text" name='name'  value="<?= $current_name ?>" >
</label>
<br/>
<br/>
<label>
    Digite o nome:
    <br/>
    <input type="email" name='email' value=<?= $current_email; ?>>
</label>
<br/>
<input type="submit">

</form>
