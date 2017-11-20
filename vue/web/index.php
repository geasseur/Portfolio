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
      <script src="jquery-3.2.1.js"></script>
      <title>Index</title>
    </head>
    <body>
      <?php
      include("header.php");
       ?>
       <?php if (isset($_SESSION['prenom'])){
         ?>
         <p><?php echo $_SESSION['prenom'];?></p>
         <?php
       } ?>


      <main class="container-fluid mt-5 bg-faded">
        <section class="container" id="présentation">
          <section class="row">
            <section class="card d-flex align-items-center col-12 col-lg-5 bg-faded mt-3">
              <img src="img/index/portrait.png" class="rounded-circle w-50" alt="portrait">
              <h2>Developpeur Web/Level designer</h2>
            </section>

            <section class="card d-flex align-items-center col-12 col-lg-5 offset-lg-2 bg-faded mt-3">
              <img class="rounded-circle w-50" src="img/index/Web.png" alt="image de wireframe">
              <h3>Travaux Web</h3>
              <p>C'est un aperçu des différents projets web que j'ai développés lors de ma formation à Simplon. Je partage le lien vers le repertoire github, au cas où quelqu'un serait intéressé pour les améliorer.</p>
              <!-- <a class="btn btn-primary mb-2" href="php/presentation_travaux_web.php">Mes sites web</a> -->
              <form class="" action="" method="post">
                <input class="btn btn-primary mb-2" type="submit" name="travauxWeb" value="Mes sites Web">
              </form>
            </section>

            <section class="card d-flex align-items-center col-12 col-lg-5 bg-faded mt-3">
              <img class="rounded-circle w-50" src="img/index/art.jpg" alt="image montrant un chevalier dessiner à l'encre">
              <h3>Travaux Graphiques</h3>
              <p>C'est une galerie de mes différents travaux "artistiques" personnels.</p>
              <form class="" action="" method="post">
                <input class="btn btn-primary mb-2" type="submit" name="dessin" value="Mes Dessins">
              </form>
            </section>

            <section class="card d-flex align-items-center col-12 col-lg-5 offset-lg-2 bg-faded mt-3">
              <img class="w-50 rounded-circle" src="img/index/0.Wallpaper.jpg" alt="image avec écrit gametrap">
              <h3>Travaux Vidéoludiques</h3>
              <p>C'est une page montrant les différents jeux sur lesquels je travaille actuellement ou auxquels j'ai participé.</p>
              <form class="" action="control/jeux/controlListeJeux.php" method="post">
                <input class="btn btn-primary mb-2" type="submit" name="jeu" value="Mes jeux">
              </form>
            </section>

            <section class="card d-flex align-items-center col-12 col-lg-5 bg-faded mt-3">
              <h3>Contact</h3>
              <p>Adresse Mail : baptiste.ventura@neuf.fr</p>
              <p>Numéro Téléphone : +33 (0)6 42 62 80 01</p>
            </section>

          </section>
        </section>
      </main>
      <?php include('footer.php');?>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="../js/jquery-3.2.1.js"></script>
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
