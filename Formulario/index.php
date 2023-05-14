<!DOCTYPE html>
<html>
  <head>
    <title>Formulário de idade</title>
  </head>
  <body>

  <?php 
    session_start();


    if(isset($_COOKIE['nome'])){
      echo "<h2>". $_COOKIE['nome'] ."</h2>";
     
    };
    
    if(isset($_SESSION['aviso'])){
      echo $_SESSION['aviso'];

      $_SESSION['aviso'] = '';
    };

   

  ?>

  <a href='delCookie.php'>Del Cookie</a>
    
    <form method="POST" action="recebedor.php">

    
    <label>
        Nome: <br/>
        <input type="text" id="name" name="nome">
    </label><br/><br/>

    <label>
        Email:<br/>
        <input type="text" id="email" name="email"><br/><br/>
    </label>


    <label>
        Idade:<br/>
        <input type="text" id="idade" name="idade"><br/><br/>
    </label>

          
      
      <input type="submit" value="Enviar">
    </form>
  </body>
</html>