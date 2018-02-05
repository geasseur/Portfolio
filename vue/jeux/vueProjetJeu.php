<!doctype html>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="../../css/style.css">
      <link rel="stylesheet" href="../../css/normalize.css">
      <link rel="stylesheet" href="../../css/main.css">
      <link rel="stylesheet" href="../../bootstrap4/css/bootstrap.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="icon" type="image/png" href=".png" />
      <title><?php echo $projet['titre'] ?></title>
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


      <main class="container-fluid m-5 bg-faded d-flex justify-content-around align-items-center">
          <section>
            <article class="col-md-12 col-lg-7 d-inline-block align-top">
              <article class="mb-5 align-top d-flex justify-content-around flex-wrap">
                <?php if (!empty($projet['imageDetail1'])): ?>
                  <img class='col-md-12 col-lg-5 mt-2 h-25' src="<?php echo $projet['imageDetail1'] ?>" alt="image site">
                <?php endif; ?>
                <?php if (!empty($projet['imageDetail2'])): ?>
                  <img class='col-md-12 col-lg-5 mt-2 h-25' src="<?php echo $projet['imageDetail2'] ?>" alt="image site">
                <?php endif; ?>
                <?php if (!empty($projet['imageDetail3'])): ?>
                  <img class='col-md-12 col-lg-5 mt-2' src="<?php echo $projet['imageDetail3'] ?>" alt="image site">
                <?php endif; ?>
              </article>
            </article>
            <article class="col-md-12 col-lg-4 d-inline-block">
              <h2><?php echo $projet['titre']; ?></h2>
              <p><?php echo $projet['texte'];?></p>
              <?php if (!empty($projet['chemin'])): ?>
                <a href="<?php echo $projet['chemin'] ?>">Lien vers le jeu</a>
              <?php endif; ?>
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
            <form class="ml-5 mt-3 mb-3" action="controlListeJeux.php" method="post">
              <input class='btn btn-primary' type="submit" name="retour" value="retour">
            </form>
          </section>
      </main>
      <footer class="mx-auto row d-flex justify-content-center align-items-center bg-inverse">
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
