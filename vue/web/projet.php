<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
      <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
      <link rel="icon" type="image/png" href=".png" />
      <title><?php echo $projet['titre'] ?></title>
    </head>
    <body>
      <?php
      include("header.php");
       ?>

      <main class="container-fluid mt-5 bg-faded d-flex justify-content-around">
          <section>
            <article class="col-5 align-top  d-inline-block">
              <img class='col-12 h-50' src="<?php echo $projet['overview'] ?>" alt="image site">
            </article>
            <article class="col-6 d-inline-block">
              <h2><?php echo $projet['titre']; ?></h2>
              <p><?php echo $projet['texte'];?></p>
              <a href="<?php echo $projet['chemin']?>">Chemin vers GitHub pour le code source</a><br>
              <a href="<?php echo $projet['cheminExemple']?>">Le site lui même</a>
            </article>
            <?php
            if (isset($_SESSION['prenom'])){
              ?>
              <form class="" action="" method="post">
                <label for="">titre</label>
                <input type="text" name="titre" value="<?php echo $projet['titre'] ?>"><br>
                <label for="">resume</label>
                <input type="text" name="resume" value="<?php echo $projet['resume']?>"><br>
                <label for="">texte</label>
                <textarea name="texte" rows="8" cols="80"><?php echo $projet['texte']?></textarea><br>
                <input type="submit" name="miseAJourProjet" value="mise a jour">
              </form>
              <?php
            } ?>
            <form class="ml-5 mt-3 mb-3" action="" method="post">
              <input class='btn btn-primary' type="submit" name="retour" value="retour">
            </form>
          </section>
      </main>
      <?php include('footer.php');?>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="jquery-3.2.1.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

          <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
          <script>
              (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
              function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
              e=o.createElement(i);r=o.getElementsByTagName(i)[0];
              e.src='https://www.google-analytics.com/analytics.js';
              r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
              ga('create','UA-XXXXX-X','auto');ga('send','pageview');
          </script>
    </body>
</html>
