<?php
  include 'connexion.php';
  function displayProjet($id){
    global $bdd;
    $displayProjet = $bdd ->query('SELECT webID ,titre, overview,resume,texte, chemin, cheminExemple from travauxWeb where webID = '.$id.'');
    var_dump($displayProjet);
    // return $displayProjet->fetch();
  }
  function modificationProjet($titre, $resume, $texte){
    $modificationProjetWeb = $bdd->prepare('UPDATE travauxWeb set titre = :titre, resume = :resume, texte = :texte');
    $modificationProjetWeb->bindValue(':titre',$titre, PDO::PARAM_STR);
    $modificationProjetWeb->bindValue(':resume',$resume, PDO::PARAM_STR);
    $modificationProjetWeb->bindValue(':texte',$texte, PDO::PARAM_STR);
    $miseAJourVoiture->execute();
    header('location:index.php');
  } ?>
