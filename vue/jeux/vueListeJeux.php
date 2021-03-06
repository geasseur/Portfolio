<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../../bootstrap4/css/bootstrap.min.css">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" href="../../css/normalize.css">
      <link rel="stylesheet" href="../../css/main.css">
      <link rel="icon" type="image/png" href=".png" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <title>Travaux Jeux Video</title>
    </head>
    <body>
      <header class="row d-flex align-items-center justify-content-center bg-inverse col-12 mx-auto">
        <script type="text/javascript" src='js/main.js'>

        </script>
        <nav class="navbar navbar-toggleable-md navbar-light col-12">
          <button class="navbar-toggler navbar-toggler-right btn-primary mt-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand row d-flex align-items-center" href="">
            <img src="../../img/index/portrait.png" class="rounded-circle col-2 col-lg-2" id="logoSite" alt="portrait de moi même">
            <div class="col-4 col-lg-4 text-white">
              <p class="titre">Baptiste
              Ventura</p>
              <p class='prof'>Developpeur Web</p>
            </div>
          </a>

          <!-- <div class="navbarPerso col-5">     -->
            <div class="collapse navbar-collapse"  id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto navbarPerso" id="lienNav">
                <li class="nav-item">
                  <a class="nav-link" href="../../index.php">Index</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="../../vue/other/profil.php">Profil</a>
                  <a class="nav-link " href="../../vue/other/profil.php"><i class="material-icons">account_circle</i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="../../vue/other/autreTravaux.php">Travaux</a>
                  <a class="nav-link " href="../../vue/other/autreTravaux.php"><i class="material-icons">work</i></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="../../html/contact.html">Contact</a>
                  <a class="nav-link " href="../../html/contact.html"><i class="material-icons">mail</i></a>
                </li>
              </ul>
            </div>
          <!-- </div> -->

        </nav>
        <?php if(isset($_SESSION['prenom'])){ ?>
        <section>
          <form class="" action="" method="post">
            <input type="submit" name="deco" value="deconnexion">
          </form>
        </section>
      <?php } ?>
      </header>

      <main class="mx-auto m-2 bg-faded d-flex justify-content-around flex-wrap">
        <?php if (isset($_SESSION['prenom']) and $_SESSION['prenom'] = 'baptiste') {
          ?>
          <!-- Formulaire pour ajouter projet -->
          <form class="" action="" method="post" enctype="multipart/form-data">
            <label for="">titre</label>
            <input type="text" name="titre" value=""><br>
            <label for="">resumé</label>
            <input type="text" name="resume" value=""><br>
            <label for="">texte</label>
            <textarea name="texte" rows="8" cols="80"></textarea><br>
            <label for="">overview</label>
            <input type="file" name="overview" value=""><br>
            <label for="">image 1</label>
            <input type="file" name="imageDetail1" value=""><br>
            <label for="">image 2</label>
            <input type="file" name="imageDetail2" value=""><br>
            <label for="">image 3</label>
            <input type="file" name="imageDetail3" value=""><br>
            <label for="">Site</label>
            <input type="text" name="chemin" value="">
            <input type="submit" name="travauxJeu" value="rentrer projet">
          </form>
          <?php
        } ?>
        <?php foreach ($listprojet as $donnees) {
          ?>
          <!-- Liste des differents projets -->
          <section class='mt-2 pb-2 col-sm-12 col-lg-6'>
            <article class="col-sm-12 col-md-5 col-lg-5 align-top d-inline-block">
              <img class='col-12 m-3 w-100 h-75' src="<?php echo $donnees['overview'] ?>" alt="image site">
            </article>
            <article class="col-sm-12 col-md-6 col-lg-6 align-top d-inline-block">
              <h2><?php echo $donnees['titre']; ?></h2>
              <p><?php echo $donnees['resume'];?></p>
              <form class="m-2" action="controlProjetJeu.php" method="post">
                <input class='d-none' type="text" name="id" value="<?php echo $donnees['id'] ?>">
                <input class='btn btn-primary ml-5 material-icons' type="submit" name="detail" value="search">
              </form>
            </article>
          </section>
          <?php
        } ?>
      </main>
      <footer class="row d-flex justify-content-center align-items-center bg-inverse">
        <p class="col-12 col-lg-3 text-white">2017 - Baptiste Ventura</p>
        <ul class="col-4 col-lg-2 offset-lg-7 mt-2 row">
          <li class="col-4 listFooter" >
            <a href="https://www.linkedin.com/in/baptiste-ventura-a17b0083/">
              <img class="w-100 h-100" src="../../img/footer/linkdin.png" alt="linkdin">
            </a>
          </li>
          <li class="col-4 listFooter">
            <a href="https://twitter.com">
              <img class="w-100 h-100" src="../../img/footer/twitter.png" alt="twitter">
            </a>
          </li>
        </ul>
      </footer>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
        <script src="../../jquery-3.2.1.js"></script>
        <script src="../../js/plugins.js"></script>
        <script src="../../js/main.js"></script>

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
