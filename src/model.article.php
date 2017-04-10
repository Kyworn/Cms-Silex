<?php
function getArticles() {
  include '../db/pdoconnect.php';
  $reponse = $pdo->prepare('SELECT id, img, title, content, pseudo, DATE_FORMAT(timedate, \'%d/%m/%Y à %H:%i\') AS timedate FROM posts WHERE id = ?');
  $reponse->execute(array($_GET['article']));
  $articles = $reponse->fetch();
  return  $articles;
}
