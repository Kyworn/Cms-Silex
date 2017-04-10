<?php
// Home page
$app->get('/', function () {
    require '../src/model.php';
    $posts = getPosts();
    ob_start();             // start buffering HTML output
    require '../views/view.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});

// Article page
$app->get('/article.php', function () {
  require '../src/model.commentaire.php';
    require '../src/model.article.php';
    $formComment = formComment();
    $commentaires = getComment();
    $articles = getArticles();
    ob_start();             // start buffering HTML output
    session_start();
    require '../views/view.article.php';
    $view = ob_get_clean(); // assign HTML output to $view
    return $view;
});
