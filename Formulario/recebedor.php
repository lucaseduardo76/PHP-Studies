<?php
    session_start();

    $nome = filter_input(INPUT_POST, "nome");
    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if($nome && $idade && $email){

        $expiracao = time() + (86400 * 30); // 86400 são 30 dias em milissegundos
    setcookie('nome' /*nome do cookie*/, $nome /* Informação salva */, $expiracao /*Tempo que vai ficar salvo no navegador*/);

        echo "NOME: $nome <br/>";
        echo "IDADE: $idade <br/>";
        echo "EMAIL:". strtoupper($email). "<br/>";
        
    }else{
        $_SESSION['aviso'] = 'Preencha os dados corretamente';

        header("Location: index.php");
        exit;
    };