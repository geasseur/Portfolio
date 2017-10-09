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
    $listprojet = $bdd->query('SELECT webID, titre, pImg,resume from travauxWeb');
    return $listprojet->fetchAll();
  }

  function ajoutProjetWeb($titre, $pImg, $overview, $resume, $texte, $chemin){
    global $bdd;
      $ajoutProjetWeb = $bdd->prepare('INSERT INTO travauxWeb(titre, pImg, overview, resume, texte, chemin) VALUES (:titre, :pImg, :overview, :resume, :texte, :chemin)');
      $req->execute(array(
        'titre'=>$titre,
        'pImg'=>$pImg,
        'overview'=>$overview,
        'resume'=>$resume,
        'texte'=>$texte,
        'chemin'=>$chemin
      ));
  }
