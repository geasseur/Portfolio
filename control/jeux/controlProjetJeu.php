<?php
session_start();
include '../../connexion.php';
include '../../model/jeux/modelProjetJeu.php';

if (isset($_POST['detail'])) {
  $projet = displayProjet($_POST['id']);
}

include '../../vue/jeux/vueProjetJeu.php';
 ?>
