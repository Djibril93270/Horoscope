<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="model.php" method="post">

    <select nme ="liste">
        <?php foreach  ($signe as $cle => $valeur):?>
        <option value ="<?= $cle?>"><?=$cle?></option>
        <?php endforeach ?>
        <input type ="submit" value = "envoyer">
        </select>

    </form>


    
</body>
</html>