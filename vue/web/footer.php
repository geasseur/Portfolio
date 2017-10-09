<footer class="row d-flex justify-content-center align-items-center bg-inverse">
  <p class="col-12 col-lg-3 text-white">2017 - Baptiste Ventura</p>
  <ul class="col-4 col-lg-2 offset-lg-7 mt-2 row">
    <li class="col-4 listFooter" >
      <a href="https://www.linkedin.com/in/baptiste-ventura-a17b0083/">
        <img class="w-100" src="img/footer/linkdin.png" alt="linkdin">
      </a>
    </li>
    <li class="col-4 listFooter">
      <a href="https://twitter.com">
        <img class="w-100" src="img/footer/twitter.png" alt="twitter">
      </a>
    </li>
  </ul>
  <?php if(!isset($_SESSION['prenom'])){ ?>
  <section>
    <form class="" action="" method="post">
      <label class='text-primary' for="">pseudo</label>
      <input type="text" name="prenom" value=""><br>
      <label class='text-primary' for="">password</label>
      <input type="password" name="password" value=""><br>
      <input type="submit" name="connexion" value="connexion">
    </form>
  </section>
  <?php } ?>
</footer>
