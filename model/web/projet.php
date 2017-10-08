<?php try{
    $bdd = new PDO('mysql:host=localhost;dbname=Portfolio;charset=utf8', 'root', 'root');
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
  }
catch (Exception $e){
    die('Erreur : ' . $e->getMessage());
  }
  function displayProjet($id){
    global $bdd;
    $displayProjet = $bdd ->query('SELECT webID ,titre, overview,texte, chemin from travauxWeb where webID = '.$id.'');
    return $displayProjet->fetch();
  } ?>
