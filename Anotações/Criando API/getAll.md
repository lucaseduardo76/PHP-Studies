Primeira coisa que devemos fazer é verificar o método que foi enviado para ter certeza que o metodo é igual ao desse arquivo local


require('../config.php);

$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){

    $sql = $pdo->query("SELECT * FROM notes")
    
    if($sql->rowCount() > 0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);

        foreach($data as $item){
            $array['result'][] = [
                'id' => item['id'],
                'title' => $item['title']
            ];
        }
    }
}else{
    $array[error] = 'Metodo não permitido';
}

require('../return.php);
