<?php
session_start();
  require_once "header.php";

  unset($_SESSION['admin']);
  echo "<h1>Vous avez bien été déconnecté.</h1>";

require_once "footer.php";