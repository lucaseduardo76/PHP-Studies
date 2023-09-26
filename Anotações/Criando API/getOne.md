Nesse caso já é enviado um parametro
Criaremos um arquivo chamado get.php

require('../config.php')

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){

  $id = filter_input(INPUT_GET, 'id');

    $sql = $pdo->prepare("SELECT * FROM notes WHERE id = :id");
    $sql->bindvalue(':id', $id);
    $sql->execute();

    if($sql->rowCount() > 0){

        $data = $sql->fetch(PDO::FETCH_ASSOC);

        $array['result'] = [

            'id' => $data['id'],
            'title' => $data['title'],
            'body' => $data['body']

        ];

    }else{
        $data['error'] = "ID inexistente";
    }


  if($id){

  }else{
    $array['error'] = "ID não enviado"
  }

}else{
    $array[error] = 'Metodo não permitido';
}

require('../return.php');