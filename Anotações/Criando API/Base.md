Primeira coisa que precisamos fazer é criar a base para a api

- Para iniciar precisamos criar o config.php para puxar o banco de dados com o PDO.

- Logo depois a gente cria uma pastinha chamada api para armazenar meus arquivos.

"Todas API vai retornar um JSON"

- Então se toda api retorna um Json eu preciso criar um Array que será Retornado por essa API

Para enviar esse array você faz da seguinte maneira.

- Cria um arquivo chamado return.php e coloca as configs abaixo

Usa uma função do PHP

# 'echo json_encode($array);'
# 'exit'

----

Se outro compputador tentar fazer um acesso à essa API terá um erro de CORS por conta de não haver uma permição a todos os sites.

Para corrigir esse erro é necessario colocar antes do retorno um header.

# header("Access-Control-Allow-Origin: *");

E agora para permitir todos os tipos de requisições (get, post, put,delete e etc)

# header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

E por final devemos explicitar qual o tipo de retorno que saira dessa API

# header("Content-Type: application/json");

É interessante já montar o array padrão de resposta:

$array = [
    'error' => "",
    'result' => []
];

