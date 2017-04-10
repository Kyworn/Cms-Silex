<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <link href="https://fonts.googleapis.com/css?family=Prompt" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="index.css">
    <title>CMS</title>
</head>
<body>
    <header>
        <h3 style="text-align:center;">CMS</h3>
    </header>

      <div class="container">
        <div class="row">

    <?php foreach ($posts as $post): ?>
      <div class="col s6 m4 l4">
                <div class="card medium">
                  <div class="card-image">
                    <a href="article.php?article=<?php echo $post['id']; ?>">
                      <?php if ($post['img'] == NULL) {
                        echo '<img class="activator" src="https://cdn.pixabay.com/photo/2013/07/12/19/16/newspaper-154444_960_720.png"/>';
                      }
                        else {
                          echo '<img class="activator" src="'.$post['img'].'" />';
                        }?>
          </a>
                  </div>
                  <div class="card-content">
                    <span class="card-title"></span>

                    <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
                  </div>
                  <div class="card-action">
                    <a class="waves-effect waves-light btn modal-trigger" href="article.php?article=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
                  </div>
                </div>
              </div>

    </a>



    <?php endforeach ?>

  </div>
</div>

    <footer class="footer">
    </footer>
</body>
</html>
