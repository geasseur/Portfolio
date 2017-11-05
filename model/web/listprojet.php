<?php
try{
    $bdd = new PDO('mysql:host=localhost;dbname=Portfolio;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  function listProjet(){
    global $bdd;
    $listprojet = $bdd->query('SELECT webID, titre, overview,resume from travauxWeb');
    return $listprojet->fetchAll();
  }

  function ajoutProjetWeb($titre, $pImg, $overview, $resume, $texte, $chemin){
    global $bdd;
    // Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($pImg) AND $pImg == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($pImg['tmp_name'], 'img/travaux/web/imgGalerie/pImg/' . basename($pImg['name']));
    }

    if (isset($overview) AND $overview['error'] == 0) {
      // On peut valider le fichier et le stocker définitivement
      move_uploaded_file($overview['tmp_name'], 'img/travaux/web/imgGalerie/gImg/' . basename($overview['name']));
    }

      $ajoutProjetWeb = $bdd->prepare('INSERT INTO travauxWeb(titre, pImg, overview, resume, texte, chemin) VALUES (:titre, :pImg, :overview, :resume, :texte, :chemin)');
      $ajoutProjetWeb->execute(array(
        'titre'=>$titre,
        'pImg'=>'img/travaux/web/imgGalerie/pImg/'.$pImg['name'],
        'overview'=>'img/travaux/web/imgGalerie/gImg/'.$overview['name'],
        'resume'=>$resume,
        'texte'=>$texte,
        'chemin'=>$chemin
      ));
      header('location:index.php');
  }
