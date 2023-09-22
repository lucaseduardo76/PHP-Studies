Aqui segue a mesma lógica dos outros arquivos, com diferença que o metodo da requisição é o PUT

require("../config.php");

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === "put"){

    parse_str(file_get_content('php://input'), $input); //  função para pegar o input que foi enviado via PUT e transformar todas as variaveis e jogar dentro de um array (segundo parametro) no meu caso $input.

    //Agora deve-se verificar se os itens que você precisa foram enviados

    

    $id = $input['id'] ?? null; // verificando se o id existe na lista $input e jogando ela na variavel ID e não existir jogar o valor 'null'

    $title = $input['title'] ?? null; // verificando se o title existe na lista $input e jogando ela na variavel title e não existir jogar o valor 'null'

    $body = $input['body'] ?? null; // verificando se o body existe na lista $input e jogando ela na variavel body e não existir jogar o valor 'null'

    $id = filter_var($id); // tratando a string
    $title = filter_var($title); // tratando a string
    $body = filter_var($body); // tratando a string

    if($id, $title, $body){

        $sql = $pdo->prepare("PREPARE * FROM notes WHERE id = :id");
        $sql->bindvalue(':id', $id);
        $sql->execute();

        if($sql->rowCount() > 0){

            $sql = $this->pdo->prepare("UPDATE notes SET tile = :title, body = :body WHERE id = :id");
            $sql -> bindValue(':id', $id);
            $sql -> bindValue(':title', $title);
            $sql -> bindValue(':body', $body);
            $sql -> execute();

            $array['result'] = [
                'id' => $id,
                'title' => $title,
                'body' => $body                
            ]

        }else{
            $array['error'] = "Id Inexistente";
        }
    }else{
        $array['error'] = "Dados não enviados
    }



}else{
    $array['error'] = "Metodo não permitido (apenas POST)";
}

require("../return.php");