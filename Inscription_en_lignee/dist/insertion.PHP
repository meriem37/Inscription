<?php

require_once('Etudiant.php');
$k = new Etudiant();
if(isset($_POST['submitButton']))
{
    $dest='';
	if ($_FILES['photo']['name']!=''){
    $nom=$_FILES['photo']['name'];
    $src=$_FILES['photo']['tmp_name'];
	$ext = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
	$dest="./assets/".$nom.".".$ext;
	move_uploaded_file($src,$dest);
    }
    $des='';
	if ($_FILES['Scan_CIN']['name']!=''){
    $nom=$_FILES['Scan_CIN']['name'];
    $src=$_FILES['Scan_CIN']['tmp_name'];
	$ext = pathinfo($_FILES['Scan_CIN']['name'], PATHINFO_EXTENSION);
	$des="./assets/".$nom.".".$ext;
	move_uploaded_file($src,$des);
    }
    $destt='';
	if ($_FILES['Bac']['name']!=''){
    $nom=$_FILES['Bac']['name'];
    $src=$_FILES['Bac']['tmp_name'];
	$ext = pathinfo($_FILES['Bac']['name'], PATHINFO_EXTENSION);
	$destt="./assets/".$nom.".".$ext;
	move_uploaded_file($src,$destt);
    }
    $desttt='';
	if ($_FILES['Releve_Bac']['name']!=''){
    $nom=$_FILES['Releve_Bac']['name'];
    $src=$_FILES['Releve_Bac']['tmp_name'];
	$ext = pathinfo($_FILES['Releve_Bac']['name'], PATHINFO_EXTENSION);
	$desttt="./assets/".$nom.".".$ext;
	move_uploaded_file($src,$desttt);
    }
    $destttt='';
	if ($_FILES['Releve_Reg']['name']!=''){
    $nom=$_FILES['Releve_Reg']['name'];
    $src=$_FILES['Releve_Reg']['tmp_name'];
	$ext = pathinfo($_FILES['Releve_Reg']['name'], PATHINFO_EXTENSION);
	$destttt="./assets/".$nom.".".$ext;
	move_uploaded_file($src,$destttt);
    }
    $k->setAll($_POST['Nom'],$_POST['Prenom'],$_POST['Sexe'],$_POST['tel'],$_POST['Adresse'],$_POST['CIN'],$_POST['CNE'],$_POST['password'],$_POST['Email'],$_POST['DateNaissance'],$dest,$des,$_POST['Type_Bac'],$_POST['Annee_Bac'],$_POST['Option_Bac'],$_POST['Lycee_Origine'],$_POST['Moy_national'],$_POST['Moy_regional'],$_POST['Mention'],$destt,$desttt,$destttt,$_POST['Academie'],$_POST['Province'],$_POST['choix1'],$_POST['choix2'],$_POST['choix3']);
    $k->add();
     header("location: Alerte.html");
}

?>

