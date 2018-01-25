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
      <link rel="icon" type="image/png" href=".png" />
      <script src="../../jquery-3.2.1.js"></script>
      <title>Index</title>
    </head>
    <body>
      <header class="row d-flex align-items-center justify-content-center container bg-inverse col-12 mx-auto">
        <nav class="navbar navbar-toggleable-md navbar-light col-12">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand row d-flex align-items-center" href="">
            <img src="../../img/index/portrait.png" class="rounded-circle col-2 col-lg-3" id="logoSite" alt="portrait de moi même">
            <h1 class="col-4 col-lg-4 text-white">Baptiste <br>
            Ventura</h1>
          </a>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto" id="lienNav">
              <li class="nav-item">
                <a class="nav-link text-white" href="../../index.php">Index</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="">Profil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="autreTravaux.php">Travaux</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="../../html/contact.html">Contact</a>
              </li>
            </ul>
          </div>

        </nav>
        <?php if(isset($_SESSION['prenom'])){ ?>
        <section>
          <form class="" action="" method="post">
            <input type="submit" name="deco" value="deconnexion">
          </form>
        </section>
      <?php } ?>
      </header>



      <main class="container mt-2 mb-2 bg-faded">
        <section>
          <article class="text-center">
            <p>Bonjour, je m'appels baptiste ventura, je suis dev web junior</p>
          </article>
        </section>
      </main>
      <footer class="mx-auto row d-flex justify-content-center align-items-center bg-inverse">
        <p class="col-12 col-lg-3 text-white">2017 - Baptiste Ventura</p>
        <ul class="col-6 col-lg-2 offset-lg-7 mt-2 row">
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
        <script src="../../js/jquery-3.2.1.js"></script>
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
