<?php
 ?>
<!DOCTYPE html>
<html style="text-align:center;">
    <head>
        <meta charset="utf-8" />
        <title>Mon blog</title>
        <link rel="stylesheet" href="index.css" media="screen" title="no title">
        <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

    </head>

    <body>


  <div class="contenu">

<div class="news" style="margin-bottom:4em;">

  <h4 style="margin-bottom:2em;"><?php echo $articles['title']; ?></h4>


  <?php if ($articles['img'] == NULL) {}
  else {
    echo '<img src="'.$articles['img'].'" style="width:2%;"/><br>';
  }?>
  <?php echo $articles['timedate'];?>
  <p><?php echo $articles['content']; ?></p>
  <p><?php echo $articles['pseudo']; ?></p>

    </p>
    <p><a href="index.php">Retour à la liste des articles</a></p>

</div>

<h5>Commentaires</h5>
<?php
  $json = $showcomment;

  foreach($json as $commentaire)
 {
   echo $commentaire['1'];
   echo '<br>';
   echo $commentaire['2'];
   echo '<br>';
   echo $commentaire['3'];
   echo '<br>';
   echo '<br>';
  }
if(isset($_SESSION['pseudo']))  {
  echo $form;
}
else {
echo '<p>Pour écrire un commentaire merci de vous créer un compte et vous connectez.';
}
echo '<br>';
 ?>
</div>
</body>
</html>
