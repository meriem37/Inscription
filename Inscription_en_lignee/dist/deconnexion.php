<?php
session_start();
session_destroy(); //On détruit le cookie de l'identifiant.
  header ("location:index.html"); //On revient au départ.
?>
