Para criar o insert e novos dados para a API

primeiro temos que criar o arquivo 'insert.php'.

Nele iremos mais uma vez fazer o require inicial do '../config.php' e no final do '../return.php'.

Outra vez devemos fazer a verificação de qual é o metodo que está sendo ultilizado nessa requisição


require("../config.php");

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === "post"){

    $title = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'body');

    if($title && $body){

        $sql = $pdo->prepare(INSERT INTO notes (title, body) VALUES (:title, :body))
        $sql->bindvalue(:title, $title);
        $pdo->bindvalue(:body, $body);
        $sql->execute();

        $id = $pdo->lastInsertId();


        $array['result'] =[
            'id' => $id,
            'title' => $title,
            'body' => $body
        ] 

    }else{
        $array['error'] = "Title ou body não preenchido";
    }
}else{
    $array['error'] = "Metodo não permitido (apenas POST)";
}

require("../return.php");