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
    $listprojet = $bdd->query('SELECT titre, pImg,resume from travauxWeb');
    return $listprojet->fetchAll();
  }
