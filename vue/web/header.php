<header class="row d-flex align-items-center justify-content-center bg-inverse col-12 mx-auto">
  <script type="text/javascript" src='js/main.js'>

  </script>
  <nav class="navbar navbar-toggleable-md navbar-light col-12">
    <button class="navbar-toggler navbar-toggler-right btn-primary mt-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand row d-flex align-items-center" href="">
      <img src="img/index/portrait.png" class="rounded-circle col-2 col-lg-3" id="logoSite" alt="portrait de moi même">
      <p class="col-4 col-lg-4 text-white titre">Baptiste <br>
      Ventura <br> Developpeur Web</p>
    </a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto" id="lienNav">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Index</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="vue/other/profil.php">Profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="vue/other/autreTravaux.php">Travaux</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="html/contact.html">Contact</a>
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
