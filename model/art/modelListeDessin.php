<?php
function listProjetArt(){
  global $bdd;
  $listprojet = $bdd->query('SELECT id, titre, overview from travauxArt ORDER BY id DESC');
  return $listprojet->fetchAll();
}

function ajoutDessin($titre, $overview){
  global $bdd;
  // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
  if (isset($overview) AND $overview['error'] == 0){
    // On peut valider le fichier et le stocker définitivement
    move_uploaded_file($overview['tmp_name'], 'img/travaux/art/' . basename($overview['name']));
  }
  $ajoutProjetWeb = $bdd->prepare('INSERT INTO travauxArt(titre, overview) VALUES (:titre, :overview)');
  $ajoutProjetWeb->execute(array(
    'titre'=>$titre,
    'overview'=>'img/travaux/art/'.$overview['name'],
  ));
      var_dump($overview['error']);
      header('location:');
} ?>
