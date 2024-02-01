<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>horoscope</title>
</head>
<body>
    <form  method="post" action="index.php?action=reponse">
     <select name="liste">
        <?php foreach ($signe as $cle => $valeur) :?>
        <option value ="<?= $cle?>"><?=$cle?></option>
        <?php endforeach ?>
    </select>
        <input type="submit" value="envoyer">
    </form>
</body>
</html>