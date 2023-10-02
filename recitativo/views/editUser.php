<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <form action="../actions/updateUserAction.php" method="post">

        <label>
            <h4>
                Digite o nome:
            </h4>
            
            <input type="text" name="name" max="100">
        </label>

        <label >
            <h4>
                Turma:
            </h4>

            <select name="turma">
                <option value="0">Bebês</option>
                <option value="1">Crianças</option>
                <option value="2">Meninos</option>
                <option value="3">Moços</option>                
            </select>
        </label>

        <input type="submit">
    </form>
</body>
</html>