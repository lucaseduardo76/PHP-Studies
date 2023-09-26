<!DOCTYPE html>
<html>
<head>
    <title>Tabela de Informações</title>

    <?php
        require 'models/dao/usuarioDao.php';
        require 'config.php';

        $userDao = new usuarioDao();
        $lista[] = $userDao->findAll(PDO::FETCH_ASSOC);
        
    ?>
</head>
<body>
    <h1>Informações Pessoais</h1>
    <table border="2" width="800">
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>CPF</th>
        </tr>
        <?php foreach($lista as $data): ?>
        <tr>
            <td><?= $data->getName(); ?></td>
            <td><?= $data->getCpf(); ?></td>
            <td><?= $data->getBirthdate(); ?></td>
        </tr>
        <?php endforeach; ?>
        <!-- Adicione mais linhas com informações aqui -->
    </table>
</body>
</html>
