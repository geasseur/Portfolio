<?php

  function connexion($prenom, $password){
    global $bdd;
    $connexion = $bdd->query('SELECT prenom, password from admin where prenom = "'.$prenom.'" ');
    while($donnees = $connexion->fetch()) {
      $testPassword = password_verify($password, $donnees['password']);
      if ($testPassword == true) {
        $_SESSION['prenom'] = $donnees['prenom'];
      }
      else{
        echo 'erreur dans le mot de passe ou le pseudo';
      }
    }
  }

  function listProjet(){
    global $bdd;
    $listprojet = $bdd->query('SELECT id, titre, resume, overview from travauxJeux ORDER BY id DESC');
    return $listprojet->fetchAll();
  }

  function ajoutProjetJeux($titre, $resume, $texte, $overview, $imageDetail1, $imageDetail2, $imageDetail3, $chemin){
    global $bdd;
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($overview) AND $overview['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($overview['tmp_name'], 'img/travaux/jeux' . basename($overview['name']));
    }

    if (isset($imageDetail1) AND $imageDetail1['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($imageDetail1['tmp_name'], 'img/travaux/jeux' . basename($imageDetail1['name']));
    }

    if (isset($imageDetail2) AND $imageDetail2['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($imageDetail2['tmp_name'], 'img/travaux/jeux' . basename($imageDetail2['name']));
    }

    if (isset($imageDetail3) AND $imageDetail3['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($imageDetail3['tmp_name'], 'img/travaux/jeux' . basename($imageDetail3['name']));
    }

      $ajoutProjetWeb = $bdd->prepare('INSERT INTO travauxJeux(titre, resume, texte, overview, imageDetail1, imageDetail2, imageDetail3, chemin) VALUES (:titre, :resume, :texte, :overview, :imageDetail1, :imageDetail2, :imageDetail3, :chemin)');
      $ajoutProjetWeb->execute(array(
        'titre'=>$titre,
        'resume'=>$resume,
        'texte'=>$texte,
        'overview'=>'img/travaux/jeux'.$overview['name'],
        'resume'=>$resume,
        'texte'=>$texte,
        'chemin'=>$chemin,
        'cheminExemple'=>$cheminExemple
      ));
      header('location:index.php');
  }

  function deconnexion(){
    session_destroy();
  } ?>
