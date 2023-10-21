<?php
require_once("conexxion.php");
                 if(isset($_POST['Ajouter'])){
               $Specialite=$_POST['Specialite'];
               $Capacite=$_POST['Capacite'];
           	   $reqAdd="insert into filiere1(Specialite,Capacite) values ('$Specialite','$Capacite')";
           	   $resultat=mysqli_query($cn,$reqAdd);
           	   if($resultat){
           	   	echo " Insertion des donnees valides";
           	   }else{
           	   	echo " Echec d'insertion des donnees";          
           	   	 	   }

                 }
				?>