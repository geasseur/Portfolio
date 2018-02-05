<header class="row d-flex align-items-center justify-content-center bg-inverse col-12 mx-auto">
  <script type="text/javascript" src='js/main.js'>

  </script>
  <nav class="navbar navbar-toggleable-md navbar-light col-12">
    <button class="navbar-toggler navbar-toggler-right btn-primary mt-4" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand row d-flex align-items-center" href="">
      <img src="img/index/portrait.png" class="rounded-circle col-2 col-lg-2" id="logoSite" alt="portrait de moi même">
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
            <a class="nav-link" href="index.php">Index</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="vue/other/profil.php">Profil</a>
            <a class="nav-link " href="vue/other/profil.php"><i class="material-icons">account_circle</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="vue/other/autreTravaux.php">Travaux</a>
            <a class="nav-link " href="vue/other/autreTravaux.php"><i class="material-icons">work</i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="html/contact.html">Contact</a>
            <a class="nav-link " href="html/contact.html"><i class="material-icons">mail</i></a>
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
