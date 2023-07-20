<?

include('naoExiste.php'); // com o include ele vai avisar que não existe esse arquivo, porém não vai dar erro, vai continuar de onde está
require('header.php');
require('config.php');

echo "Conteudo do home <br/>";

echo "NOME DE USUARIO: ".$usuario;