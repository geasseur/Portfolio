<?php
session_start();
include 'connexion.php';
//affiche l'index
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

//affiche la liste des projet Web et permet d'en ajouter
if ((isset($_POST['travauxWeb']) or isset($_POST['retour']) or isset($_GET['test']) and !isset($_POST['detail']))) {
  require 'model/web/listprojet.php';
  $listprojet = listprojet();
  if (isset($_POST['titre']) and isset($_FILES['pImg']) and isset($_FILES['overview']) and isset($_POST['resume']) and isset($_POST['texte']) and isset($_POST['chemin']) and isset($_POST['cheminExemple']) ) {
    ajoutProjetWeb($_POST['titre'],$_FILES['pImg'], $_FILES['overview'], $_POST['resume'], $_POST['texte'], $_POST['chemin'],$_POST['cheminExemple']);
  }
  require 'vue/web/listprojet.php';
}

//affiche un projet en détail
if (isset($_POST['detail']) and isset($_POST['webID'] )) {
  require 'model/web/projet.php';
  $projet = displayProjet($_POST['webID']);
  require 'vue/web/projet.php';
}

if (isset($_POST['miseAJourProjet'])) {
  modificationProjet($_POST['titre'], $_POST['resume'], $_POST['texte']);
  require 'vue/web/projet.php';
}

if (isset($_POST['jeu']) or isset($_POST['dessin'])) {
  ?>
  <h1>Construction en cours</h1>
  <?php
}
?>
