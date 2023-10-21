<?php
require_once('Etudiant.php');
$s = new Etudiant();
$s->recuperercne($_GET['CNE']);
//echo $_GET['CNE'];
$s=$s->selectt();

if(isset($_POST['btmod'])){
    require_once('Etudiant.php');
    $s = new Etudiant();
        $Nom=$_POST['Nom'];
        $Prenom=$_POST['Prenom'];
        $Sexe=$_POST['Sexe'];
        $tel=$_POST['tel'];
        $Adresse=$_POST['Adresse'];
        $CIN=$_POST['CIN'];
        $CNE=$_POST['CNE'];
        $password=$_POST['password'];
        $Email=$_POST['Email'];
        $DateNaissance=$_POST['DateNaissance'];
        $photo=$_POST['photo'];
        $Scan_CIN=$_POST['Scan_CIN'];
        $TypeBac=$_POST['Type_Bac'];
        $AnneeBac=$_POST['Annee_Bac'];
        $OptionBac=$_POST['Option_Bac'];
        $LyceeOrigine=$_POST['Lycee_Origine'];
        $Moy_national=$_POST['Moy_national'];
        $Moy_regional=$_POST['Moy_regional'];
        $Mention=$_POST['Mention'];
        $Bac=$_POST['Bac'];
        $Releve_Bac=$_POST['Releve_Bac'];
        $Releve_Reg=$_POST['Releve_Reg'];
        $Academie=$_POST['Academie'];
        $Province=$_POST['Province'];
        $choix1=$_POST['choix1'];
        $choix2=$_POST['choix2'];
        $choix3=$_POST['choix3'];
        $s->setAll($Nom,$Prenom,$Sexe,$tel,$Adresse,$CIN,$CNE,$password,$Email,$DateNaissance,$photo,$Scan_CIN,$TypeBac,$AnneeBac,$OptionBac,$LyceeOrigine,$Moy_national,$Moy_regional,$Mention,$Bac,$Releve_Bac,$Releve_Reg,$Academie,$Province,$choix1,$choix2,$choix3);
        $s->updateEtu($Nom,$Prenom,$Sexe,$tel,$Adresse,$CIN,$CNE,$password,$Email,$DateNaissance,$photo,$Scan_CIN,$TypeBac,$AnneeBac,$OptionBac,$LyceeOrigine,$Moy_national,$Moy_regional,$Mention,$Bac,$Releve_Bac,$Releve_Reg,$Academie,$Province,$choix1,$choix2,$choix3);
    }
//$IDF=isset($POST['IDF'])? $_POST['IDF']:0;
/*if(isset($_POST['btmod'])){
    $Nom=$_POST['Nom'];
    $Prenom=$_POST['Prenom'];
    $Sexe=$_POST['Sexe'];
    $tel=$_POST['tel'];
    $Adresse=$_POST['Adresse'];
    $CIN=$_POST['CIN'];
    $CNE=$_POST['CNE'];
    $Email=$_POST['Email'];
    $DateNaissance=$_POST['DateNaissance'];
    $photo=$_POST['photo'];
    $Scan_CIN=$_POST['Scan_CIN'];
    $s->setAll($_POST['Nom'],$_POST['Prenom'],$_POST['Sexe'],$_POST['tel'],$_POST['Adresse'],$_POST['CIN'],$_POST['CNE'],$_POST['password'],$_POST['Email'],$_POST['DateNaissance'],$_POST['photo'],$_POST['Scan_CIN']);
    $s=$s->updateEtu();
}*/

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Creative - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#page-top">ESTS</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto my-2 my-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.html">Acceuil</a></li>
                        <li class="nav-item"><a  class="nav-link" href="index.html">login </a></li>
                        <li class="nav-item"><a  class="nav-link" href="deconnexion.php">Déconnexion </a></li>


                    </ul>
                </div>
            </div>
        </nav>

<br>
<br>
<br>
<!-- modifier2.php?ID=<?php echo $s->ID ?>-->
        <form id="contactForm" action="" method="post"  enctype="multipart/form-data" data-sb-form-api-token="API_TOKEN" >
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
               <div class="col-lg-8 col-xl-6 text-center">
        <h2 style="text-align:center;"> Mettre a jour vos informations</h2>
        <div class="alert alert-primary" role="alert">
        <div class="form-floating mb-3">
            <label><b>Nom:</b></label>
			<input type="text" name="Nom" class="zonetext"  value="<?php echo $s->Nom; ?>">
            <div class="form-floating mb-3">
            <label><b>Prenom:</b></label>
			<input type="text" name="Prenom" class="zonetext" value="<?php echo $s->Prenom ?>">
            <div class="form-floating mb-3">
            <label><b>Sexe:</b></label>
			<input type="text" name="Sexe" class="zonetext" value="<?php echo $s->Sexe ?>">
            <div class="form-floating mb-3">
            <label><b>tel:</b></label>
			<input type="text" name="tel" class="zonetext" value="<?php echo $s->tel ?>">
            <div class="form-floating mb-3">
            <label><b>Adresse:</b></label>
			<input type="text" name="Adresse" class="zonetext" value="<?php echo $s->Adresse?>">
            <div class="form-floating mb-3">
            <label><b>CIN:</b></label>
			<input type="text" name="CIN" class="zonetext" value="<?php echo $s->CIN ?>">
            <div class="form-floating mb-3">
            <label><b>CNE:</b></label>
			<input type="text" name="CNE" class="zonetext" value="<?php echo $s->CNE ?>">
            <div class="form-floating mb-3">
            <label><b>password:</b></label>
			<input type="text" name="password" class="zonetext" value="<?php echo $s->password ?>">
            <div class="form-floating mb-3">
            <label><b>Email:</b></label>
			<input type="text" name="Email" class="zonetext" value="<?php echo $s->Email?>">
            <div class="form-floating mb-3">
            <label><b>DateNaissance:</b></label>
			<input type="text" name="DateNaissance" class="zonetext" value="<?php echo $s->DateNaissance ?>">
            <div class="form-floating mb-3">
            <label><b>photo:</b></label>
            <img src="<?php echo $s->photo?>"><br>
			<input type="text" name="photo" class="zonetext" value="<?php echo $s->photo ?>">
            <div class="form-floating mb-3">
            <label><b>Scan_CIN:</b></label>
            <img src="<?php echo $s->Scan_CIN?>"><br>
			<input type="text" name="Scan_CIN" class="zonetext" value="<?php echo $s->Scan_CIN ?>">
            <div class="form-floating mb-3">
            <label><b>Type_Bac:</b></label>
			<input type="text" name="Type_Bac" class="zonetext" value="<?php echo $s->Type_Bac ?>">
            <div class="form-floating mb-3">
            <label><b>Annee_Bac:</b></label>
			<input type="text" name="Annee_Bac" class="zonetext" value="<?php echo $s->Annee_Bac ?>">
            <div class="form-floating mb-3">
            <label><b>Option_Bac:</b></label>
			<input type="text" name="Option_Bac" class="zonetext" value="<?php echo $s->Option_Bac ?>">
            <div class="form-floating mb-3">
            <label><b>Lycee_Origine:</b></label>
			<input type="text" name="Lycee_Origine" class="zonetext" value="<?php echo $s->Lycee_Origine ?>">
            <div class="form-floating mb-3">
            <label><b>Moy_national:</b></label>
			<input type="text" name="Moy_national" class="zonetext" value="<?php echo $s->Moy_national ?>">
            <div class="form-floating mb-3">
            <label><b>Moy_regional:</b></label>
			<input type="text" name="Moy_regional" class="zonetext" value="<?php echo $s->Moy_regional?>">
            <div class="form-floating mb-3">
            <label><b>Mention:</b></label>
			<input type="text" name="Mention" class="zonetext" value="<?php echo $s->Mention ?>">
            <div class="form-floating mb-3">
            <label><b>Bac:</b></label>
            <img src="<?php echo $s->Bac?>"><br>
			<input type="text" name="Bac" class="zonetext" value="<?php echo $s->Bac ?>">
            <div class="form-floating mb-3">
            <label><b>Releve_Bac:</b></label>
            <img src="<?php echo $s->Releve_Bac?>"><br>
			<input type="text" name="Releve_Bac" class="zonetext" value="<?php echo $s->Releve_Bac ?>">
            <div class="form-floating mb-3">
            <label><b>Releve_Reg:</b></label>
            <img src="<?php echo $s->Releve_Reg?>"><br>
			<input type="text" name="Releve_Reg" class="zonetext" value="<?php echo $s->Releve_Reg ?>">
            <div class="form-floating mb-3">
            <label><b>Academie:</b></label>
			<input type="text" name="Academie" class="zonetext" value="<?php echo $s->Academie?>">
            <div class="form-floating mb-3">
            <label><b>Province:</b></label>
			<input type="text" name="Province" class="zonetext" value="<?php echo $s->Province ?>">
            <div class="form-floating mb-3">
            <label><b>choix1:</b></label>
			<input type="text" name="choix1" class="zonetext" value="<?php echo $s->choix1 ?>">
            <div class="form-floating mb-3">
            <label><b>choix2:</b></label>
			<input type="text" name="choix2" class="zonetext" value="<?php echo $s->choix2 ?>">
            <div class="form-floating mb-3">
            <label><b>choix3:</b></label>
			<input type="text" name="choix3" class="zonetext" value="<?php echo $s->choix3 ?>"><br>
            <button type="submit" class="submit" name="btmod" value="Mettre a jour">Mettre a jour</button>
             <a href="pdf/index.html"> Telecharger</a>
   </body>
</HTML>
