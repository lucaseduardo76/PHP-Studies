<?php 
    require 'config.php';
    require 'dao/UsuarioDaoMysql.php';
    
    $u_dao = new UsuarioDaoXml($pdo); 
    
    $id = filter_input(INPUT_GET, 'id');
    $user = false;

    if(true){
        $user = $u_dao->findById($id);
    }
    
    if($user == false){
        header("Location: index.php");
        exit;
    };
    ?>

<form action="editar_action.php" method="post">
    <input type="hidden" name="id" value="<?= $user->getId() ?>">

<label>
    Digite o nome:
    <br/>
    <input type="text" name='name'  value="<?= $user->getName() ?>" >
</label>
<br/>
<br/>
<label>
    Digite o nome:
    <br/>
    <input type="email" name='email' value=<?= $user->getEmail(); ?>>
</label>
<br/>
<input type="submit">

</form>
