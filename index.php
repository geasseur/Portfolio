<?php
session_start();
if (!isset($_POST['travauxWeb']) and !isset($_POST['retour']) and !isset($_POST['detail']) and !isset($_GET['test']) and (!isset($_POST['jeu']) and !isset($_POST['dessin']) and !isset($_POST['contact'])) ) {
  require 'model/web/index.php';
  if (isset($_POST['deco'])) {
    deconnexion();
    header('Location:index.php');
  }
  if (isset($_POST['connexion'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = htmlspecialchars($_POST['password']);
    connexion($prenom, $password);
    header('Location:index.php');
  }
  require 'vue/web/index.php';
}

if ((isset($_POST['travauxWeb']) or isset($_POST['retour']) or isset($_GET['test']) and !isset($_POST['detail']))) {
  require 'model/web/listprojet.php';
  $listprojet = listprojet();
  if (isset($_POST['titre']) and isset($_POST['pImg']) and isset($_POST['overview']) and isset($_POST['resume']) and isset($_POST['texte']) and isset($_POST['chemin'])) {
    ajoutProjetWeb($_POST['titre'],$_POST['pImg'], $_POST['overview'], $_POST['resume'], $_POST['texte'], $_POST['chemin']);
  }
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
