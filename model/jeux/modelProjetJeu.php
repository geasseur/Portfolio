<?php
function displayProjet($id){
  global $bdd;
  $displayProjet = $bdd ->query('SELECT titre,resume, texte, overview, imageDetail1, imageDetail2, imageDetail3, chemin from travauxJeux where id = '.$id.'');
  return $displayProjet->fetch();
} ?>
