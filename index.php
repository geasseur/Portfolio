<?php
session_start();
include 'connexion.php';
//affiche l'index avec les différents projets

if (!isset($_POST['detail'])) {
  include 'model/web/listprojet.php';;
  include 'model/web/index.php';
  $listprojet = listProjet();
  include 'vue/web/listprojet.php';
}

if (isset($_POST['detail'])) {
  include 'model/web/projet.php';
  $projet = displayProjet($_POST['webID']);
  include 'vue/web/projet.php';
}


if(isset($_POST['deco'])) {
    deconnexion();
    header('Location:index.php');
}

if(isset($_POST['connexion'])) {
    $prenom = htmlspecialchars($_POST['prenom']);
    $password = htmlspecialchars($_POST['password']);
    connexion($prenom, $password);
    header('Location:index.php');
  }

if (isset($_POST['titre']) and isset($_FILES['pImg']) and isset($_FILES['overview']) and isset($_POST['resume']) and isset($_POST['texte']) and isset($_POST['chemin']) and isset($_POST['cheminExemple']) ) {
    ajoutProjetWeb($_POST['titre'],$_FILES['pImg'], $_FILES['overview'], $_POST['resume'], $_POST['texte'], $_POST['chemin'],$_POST['cheminExemple']);
}



//   include 'model/web/index.php';
//   include 'model/web/listprojet.php'
//   if(isset($_POST['deco'])) {
//     deconnexion();
//     header('Location:index.php');
//   }
// if(isset($_POST['connexion'])) {
//     $prenom = htmlspecialchars($_POST['prenom']);
//     $password = htmlspecialchars($_POST['password']);
//     connexion($prenom, $password);
//     header('Location:index.php');
//   }
// if (isset($_POST['titre']) and isset($_FILES['pImg']) and isset($_FILES['overview']) and isset($_POST['resume']) and isset($_POST['texte']) and isset($_POST['chemin']) and isset($_POST['cheminExemple']) ) {
//     ajoutProjetWeb($_POST['titre'],$_FILES['pImg'], $_FILES['overview'], $_POST['resume'], $_POST['texte'], $_POST['chemin'],$_POST['cheminExemple']);
//   }
//   $listprojet = listprojet();
//   require 'vue/web/listprojet.php';
//
// //affiche la liste des projet Web et permet d'en ajouter
// if ((isset($_POST['travauxWeb']) or isset($_POST['retour']) or isset($_GET['test']) and !isset($_POST['detail']))) {
//   require 'model/web/listprojet.php';
//
//   if (isset($_POST['titre']) and isset($_FILES['pImg']) and isset($_FILES['overview']) and isset($_POST['resume']) and isset($_POST['texte']) and isset($_POST['chemin']) and isset($_POST['cheminExemple']) ) {
//     ajoutProjetWeb($_POST['titre'],$_FILES['pImg'], $_FILES['overview'], $_POST['resume'], $_POST['texte'], $_POST['chemin'],$_POST['cheminExemple']);
//   }
//   require 'vue/web/listprojet.php';
// }
//
// //affiche un projet en détail
// if (isset($_POST['detail']) and isset($_POST['webID'] )) {
//   require 'model/web/projet.php';
//   $projet = displayProjet($_POST['webID']);
//   require 'vue/web/projet.php';
// }
//
// if (isset($_POST['miseAJourProjet'])) {
//   modificationProjet($_POST['titre'], $_POST['resume'], $_POST['texte']);
//   require 'vue/web/projet.php';
// }
//
// if (isset($_POST['jeu']) or isset($_POST['dessin'])) {
// }
?>
