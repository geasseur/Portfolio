<?php
session_start();
include '../../connexion.php';
include '../../model/jeux/modelListeJeux.php';

$listprojet = listProjet();

if (isset($_POST['connexion'])) {
  connexion($_POST['prenom'], $_POST['password']);
}

if (isset($_POST['titre']) and isset($_POST['resume']) and isset($_POST['texte']) and isset($_FILES['overview']) and isset($_FILES['imageDetail1']) and isset($_FILES['imageDetail2']) and isset($_FILES['imageDetail3']) ) {
  ajoutProjetJeux($_POST['titre'],$_POST['resume'], $_POST['texte'], $_FILES['overview'], $_FILES['imageDetail1'], $_FILES['imageDetail2'],$_FILES['imageDetail3'], $_POST['chemin']);
}

include '../../vue/jeux/vueListeJeux.php';
 ?>
