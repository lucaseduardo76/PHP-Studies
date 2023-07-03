<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $array = [
            'nome' => 'Lucas',
            'idade' => 22,
            'empresa' => 'Wayfair',
            'cor' => 'vinho',
            'raça' => 'negra',
            'cidade' => 'eunapolis'
        ];
        
        $chave = array_keys($array);
        
        $valores = array_values($array);
    
       ?>

</head>
<body>
    
    <!--<table border="1" width="200px">
        <?php
          /* for($n = 0; $n < 5; $n++){
                echo '<tr> <td style="padding: 5px"><b>'.$chave[$n].'</b></td> <td style="padding: 5px">'.$valores[$n].'</td> </td>';
           };*/
        ?>        
    </table>
        -->

    <table border="1" width="200px">
       <?php foreach($array as $key => $value): ?>
        <tr>
            <td><b><?php echo $key; ?></b></td>
            <td><?php echo $value; ?></td>
        </tr> 
        <?php endforeach; ?> 
    </table>

    <br/>
    
    <table border="1" width="500px">
        <tr>
            <?php foreach($chave as $key): ?>       
                <th> <?php echo $key; ?> </th>       
            <?php endforeach; ?> 
        </tr> 

        <tr>
            <?php foreach($valores as $key): ?>       
                <td> <?php echo $key; ?> </td>       
            <?php endforeach; ?> 
        </tr> 
    </table>

 

</body>
</html>