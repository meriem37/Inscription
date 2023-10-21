<?php
require("fpdf.php");
$pdf = new FPDF();
if(isset($_POST['create'])){
	$Nom=$_POST['Nom'];
	$Prenom=$_POST['Prenom'];
	$Email=$_POST['Email'];
    $CIN=$_POST['CIN'];
    $CNE=$_POST['CNE'];
    $Type_Bac=$_POST['Type_Bac'];
    $Annee_Bac=$_POST['Annee_Bac'];
    $Option_Bac=$_POST['Option_Bac'];
    $Moy_national=$_POST['Moy_national'];
    $Moy_regional=$_POST['Moy_regional'];
    $Mention=$_POST['Mention'];
    $Academie=$_POST['Academie'];
    $Province=$_POST['Province'];
    $choix1=$_POST['choix1'];
    $choix2=$_POST['choix2'];
    $choix3=$_POST['choix3'];
    $pdf->AddPage();
    $pdf->SetFont("Arial","B",19);
    $pdf->Cell(190,10,"Informations de preinscription:",1,1,'C');
    $pdf->Cell(50,10,"Nom",1,0);
    $pdf->Cell(140,10,$Nom,1,1);
    $pdf->Cell(50,10,"Prenom",1,0);
    $pdf->Cell(140,10,$Prenom,1,1);
    $pdf->Cell(50,10,"Email",1,0);
    $pdf->Cell(140,10,$Email,1,1);
    $pdf->Cell(50,10,"CIN",1,0);
    $pdf->Cell(140,10,$CIN,1,1);
    $pdf->Cell(50,10,"CNE",1,0);
    $pdf->Cell(140,10,$CNE,1,1);
    $pdf->Cell(50,10,"Type_Bac",1,0);
    $pdf->Cell(140,10,$Type_Bac,1,1);
    $pdf->Cell(50,10,"Option_Bac",1,0);
    $pdf->Cell(140,10,$Option_Bac,1,1);
    $pdf->Cell(50,10,"Moy_national",1,0);
    $pdf->Cell(140,10,$Moy_national,1,1);
    $pdf->Cell(50,10,"Moy_regional",1,0);
    $pdf->Cell(140,10,$Moy_regional,1,1);
    $pdf->Cell(50,10,"Mention",1,0);
    $pdf->Cell(140,10,$Mention,1,1);
    $pdf->Cell(50,10,"Academie",1,0);
    $pdf->Cell(140,10,$Academie,1,1);
    $pdf->Cell(50,10,"Province",1,0);
    $pdf->Cell(140,10,$Province,1,1);
    $pdf->Cell(50,10,"choix1",1,0);
    $pdf->Cell(140,10,$choix1,1,1);
    $pdf->Cell(50,10,"choix2",1,0);
    $pdf->Cell(140,10,$choix2,1,1);
    $pdf->Cell(50,10,"choix3",1,0);
    $pdf->Cell(140,10,$choix3,1,1);
    $pdf->Cell(190,10,"Signature:",1,1,'C');
    $pdf->Output();

}
?>