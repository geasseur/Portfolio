<header class="row d-flex align-items-center justify-content-center">
  <nav class="navbar navbar-toggleable-md navbar-light col-12">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand row d-flex align-items-center" href="">
      <img src="img/header/logoLoup.tif" class="col-4 col-lg-6" id="logoSite" alt="logo noir et blanc en forme de loup">
      <h1 class="col-4 col-lg-4">Baptiste <br>
      Ventura</h1>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" id="lienNav">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?test">Web</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="construction.html">Arts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="control/jeux/controlListeJeux.php">Jeux Video</a>
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
