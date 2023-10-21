<?php
session_start();
session_destroy(); //On détruit le cookie de l'identifiant.
  header ("location:login.php"); //On revient au départ.
?>
