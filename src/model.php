 <?php
 session_start();

 function getPosts() {
   include '../db/pdoconnect.php';
        $posts = $pdo->query('select * from posts order by id desc');
     return $posts;
 }
