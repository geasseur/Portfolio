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

  function deconnexion(){
    session_destroy();
  }
