<?php
session_start();
if (!isset($_POST['travauxWeb'])) {
  require 'model/web/index.php';
  require 'vue/web/index.php';
}

if (isset($_POST['travauxWeb'])) {
  require 'model/web/listprojet.php';
  $listprojet = listprojet();
  require 'vue/web/listprojet.php';
}
?>
