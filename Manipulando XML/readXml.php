<?php
$xml = simplexml_load_file('users.xml');
foreach ($xml->user as $item) {
    echo "ID: " . $item->id . "<br>";
    echo "Name: " . $item->name . "<br>";
    echo "Description: " . $item->description . "<br><br>";
}
?>
<html>
  <form action="crudXml.php" method="get">

    <label for="id">Digite o ID</label>
    

  <input type="text" name="id" id="id"></br>
  <label for="name">Digite o Nome</label>
  <input type="text" name="name" id="name"></br>
  <label for="name">Digite a descrição</label>
  <input type="text" name="desc"></br>

  <input type="submit">

  </form>
  
  
  <a href="updateXml.php">Editar o id 2</a>
</html>