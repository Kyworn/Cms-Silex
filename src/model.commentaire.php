<?php
function getComment() {
       include '../db/pdoconnect.php';
       $reponse = $pdo->prepare('SELECT * from commentaire WHERE idb = ?');
       $reponse->execute(array($_GET['article']));
       $comments = $reponse->fetchAll();
       return $comments;
}
$showcomment = getComment();




function formComment() {
    $form =
    '<form action="" method="post" style="width:50%; display: inline-block; text-align: center;">
        <h5>Contenu du commentaire</h5><p>255 caractères</p>
        <br>
        <textarea id="icon_prefix2" name="commentaire" class="materialize-textarea"></textarea>

        <input class="btn waves-effect waves-light" class="material-icons right" type="submit" value="Envoyé" name="submit"/>

      </form>';
  return $form;
}
$form = formComment();
function createComment() {
include '../db/pdoconnect.php';
$sql = "INSERT INTO commentaire (idb, auteur, commentaire) VALUES ('".$_GET['article']."','".$_SESSION["pseudo"]."','".$_POST["commentaire"]."')";
}
