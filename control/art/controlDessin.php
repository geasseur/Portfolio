<?php
session_start();
include '../../connexion.php';
include '../../model/art/modelListeDessin.php';

$listeDessin = listProjetArt();
if (!empty($_POST['titre']) and !empty($_FILES['dessin']) and isset($_POST['nouveauDessin'])) {
  var_dump($_POST['titre']);
  ajoutDessin($_POST['titre'],$_FILES['dessin']);
}


include '../../vue/art/vueListeDessin.php';
 ?>
