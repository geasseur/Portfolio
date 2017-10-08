<?php
session_start();
if (!isset($_POST['travauxWeb']) and !isset($_POST['retour']) and !isset($_POST['detail']) and !isset($_GET['test']) and (!isset($_POST['jeu']) and !isset($_POST['dessin']) and !isset($_POST['contact'])) ) {
  require 'model/web/index.php';
  require 'vue/web/index.php';
}

if ((isset($_POST['travauxWeb']) or isset($_POST['retour']) or isset($_GET['test']) and !isset($_POST['detail']) )){
  require 'model/web/listprojet.php';
  $listprojet = listprojet();
  require 'vue/web/listprojet.php';
}

if (isset($_POST['detail']) and isset($_POST['webID']) and isset($_SESSION['page'])) {
  require 'model/web/projet.php';
  $projet = displayProjet($_POST['webID']);
  require 'vue/web/projet.php';
}

if (isset($_POST['jeu']) or isset($_POST['dessin']) or isset($_POST['contact'])) {
  ?>
  <h1>Construction en cours</h1>
  <?php
}
?>
