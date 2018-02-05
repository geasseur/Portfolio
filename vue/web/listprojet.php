<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave" rel="stylesheet">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/style.css">
      <link rel="icon" type="image/png" href=".png" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <title>Index</title>
    </head>
    <body>
      <?php
      include("header.php");
       ?>
       <article class="text-center mt-3">
         <h3>Projets Web</h3>
         <p>Bienvenu sur mon Portfolio, visiteur. Vous trouverez sur cette page tous mes projets web, du plus récent au plus ancien.</p>
         <p>Vous pouvez également voir ma page <a class="" href="vue/other/profil.php">Profil</a>, où je donne quelques détails sur moi même. La page <a class="" href="html/contact.html">Contact</a> founit mes coordonnées si vous désirez me contacter.</p>
         <p>La page <a class="" href="vue/other/autreTravaux.php">Travaux</a> présentera d'autres créations autres que web.</p>
       </article>
      <main class="container d-flex justify-content-around flex-wrap">
        <?php if (isset($_SESSION['prenom']) and $_SESSION['prenom'] = 'baptiste') {
          ?>
          <!-- Formulaire pour ajouter projet -->
          <form class="" action="" method="post" enctype="multipart/form-data">
            <label for="">titre</label>
            <input type="text" name="titre" value=""><br>
            <label for="">pImg</label>
            <input type="file" name="pImg" value=""><br>
            <label for="">overview</label>
            <input type="file" name="overview" value=""><br>
            <label for="">resume</label>
            <input type="text" name="resume" value=""><br>
            <label for="">texte</label>
            <textarea name="texte" rows="8" cols="80"></textarea><br>
            <label for="">code Source</label>
            <input type="text" name="chemin" value=""><br>
            <label for="">Site</label>
            <input type="text" name="cheminExemple" value="">
            <input type="submit" name="travauxWeb" value="rentrer projet">
          </form>
          <?php
        } ?>
        <?php foreach ($listprojet as $donnees) {
          ?>
          <!-- Liste des differents projets -->
          <section class='col-sm-12 col-lg-5 projetWeb p-3'>
            <article class="col-sm-12 col-md-5 col-lg-5 align-top d-inline-block">
              <img class='col-12 w-100 h-100 m-3 imgSite' src="<?php echo $donnees['overview'] ?>" alt="image site">
            </article>
            <article class=" pt-2 col-sm-12 col-md-6 col-lg-6 align-top d-inline-block texte">
              <div class="d-flex flex-column align-items-center">
                <h2 class="titleFont"><?php echo $donnees['titre']; ?></h2>
                <p><?php echo $donnees['resume'];?></p>
              </div>
            </article>
            <form class="m-2 detailWeb" action="" method="post">
              <input class='d-none' type="number" name="webID" value="<?php echo $donnees['webID'] ?>">
              <input class='btn btnDetailWeb ml-5 material-icons' type="submit" name="detail" value="search">
            </form>
          </section>
          <?php
        } ?>
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
