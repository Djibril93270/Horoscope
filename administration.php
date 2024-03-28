<form action ='index.php?action=administrer' method ='post'>
<?php foreach ($signe as $cle => $v) :?>
      <label for = "<?=$cle?>"> <?= $cle?> </label>
      <input type = "texte" id ="<?= $cle?>"name =" <?=$cle?>" value =" <?= $v?>"> </br>
    <?php endforeach ?>
    <input type ="submit" value = "ok">
</form>