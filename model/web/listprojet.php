<?php

  function listProjet(){
    global $bdd;
    $listprojet = $bdd->query('SELECT webID, titre, overview,resume from travauxWeb ORDER BY webID DESC');
    return $listprojet->fetchAll();
  }

  function ajoutProjetWeb($titre, $pImg, $overview, $resume, $texte, $chemin, $cheminExemple){
    global $bdd;
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($pImg) AND $pImg['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($pImg['tmp_name'], 'img/travaux/web/imgGalerie/pImg/' . basename($pImg['name']));
    }

    if (isset($overview) AND $overview['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($overview['tmp_name'], 'img/travaux/web/imgGalerie/gImg/' . basename($overview['name']));
    }

      $ajoutProjetWeb = $bdd->prepare('INSERT INTO travauxWeb(titre, pImg, overview, resume, texte, chemin, cheminExemple) VALUES (:titre, :pImg, :overview, :resume, :texte, :chemin, :cheminExemple)');
      $ajoutProjetWeb->execute(array(
        'titre'=>$titre,
        'pImg'=>'img/travaux/web/imgGalerie/pImg/'.$pImg['name'],
        'overview'=>'img/travaux/web/imgGalerie/gImg/'.$overview['name'],
        'resume'=>$resume,
        'texte'=>$texte,
        'chemin'=>$chemin,
        'cheminExemple'=>$cheminExemple
      ));
      header('location:index.php');
  }
