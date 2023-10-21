<?php

require_once('conexxion.php');

class Etudiant{
    public $Nom;
    public $Prenom;
    public $Sexe;
    public $tel;
    public $Adresse;
    public $CIN;
    public $CNE;
    public $password;
    public $Email;
    public $DateNaissance;
    public $photo;
    public $Scan_CIN;
    public $TypeBac;
    public $AnneeBac;
    public $OptionBac;
    public $LyceeOrigine;
    public $Moy_national;
    public $Moy_regional;
    public $Mention;
    public $Bac;
    public $Releve_Bac;
    public $Releve_Reg;
    public $Academie;
    public $Province;
    public $choix1;
    public $choix2;
    public $choix3;
    public $db;
     public function getcne()
    {
        return $CNE;
    }

    public function setNom($CNE)
    {
        $this->CNE = $CNE;
    }

    public function setAll($Nom,$Prenom,$Sexe,$tel,$Adresse,$CIN,$CNE,$password,$Email,$DateNaissance,$photo,$Scan_CIN,$TypeBac,$AnneeBac,$OptionBac,$LyceeOrigine,$Moy_national,$Moy_regional,$Mention,$Bac,$Releve_Bac,$Releve_Reg,$Academie,$Province,$choix1,$choix2,$choix3)
    {

        $this->Nom = $Nom;
        $this->Prenom = $Prenom;
        $this->Sexe = $Sexe;
        $this->tel = $tel;
        $this->Adresse = $Adresse;
        $this->CIN = $CIN;
        $this->CNE= $CNE;
        $this->password= $password;
        $this->Email = $Email;
        $this->DateNaissance= $DateNaissance;
        $this->photo = $photo;
        $this->Scan_CIN = $Scan_CIN;
        $this->Type_Bac = $TypeBac;
        $this->Annee_Bac = $AnneeBac;
        $this->Option_Bac = $OptionBac;
        $this->Lycee_Origine = $LyceeOrigine;
        $this->Moy_national = $Moy_national;
        $this->Moy_regional = $Moy_regional;
        $this->Mention = $Mention;
        $this->Bac= $Bac;
        $this->Releve_Bac = $Releve_Bac;
        $this->Releve_Reg= $Releve_Reg;
        $this->Academie = $Academie;
        $this->Province = $Province;
        $this->choix1 = $choix1;
        $this->choix2 = $choix2;
        $this->choix3 = $choix3;

    }


    public function recuperercne($CNE){
        $this->CNE=$CNE;
    }
    public function select()
    {
        $db = new conexxion();
        $db->query("select Nom,Prenom,Sexe,tel,Adresse,CIN,CNE,password,Email,DateNaissance,photo,Scan_CIN,Type_Bac,Annee_Bac,Option_Bac,Lycee_Origine,Moy_national,Moy_regional,Mention,Bac,Releve_Bac ,Releve_Reg,Academie,Province,choix1,choix2,choix3 from Etudiant where CNE='". $this->CNE ."'");
        $db->execute();
        return $db->result();
    }
    public function selectt()
    {
        $db = new conexxion();
        $db->query("select Nom,Prenom,Sexe,tel,Adresse,CIN,CNE,password,Email,DateNaissance,photo,Scan_CIN,Type_Bac,Annee_Bac,Option_Bac,Lycee_Origine,Moy_national,Moy_regional,Mention,Bac,Releve_Bac ,Releve_Reg,Academie,Province,choix1,choix2,choix3 from Etudiant where CNE='". $this->CNE ."'");
        $db->execute();
        return $db->one();
    }



    public function add()
    {
        $db = new conexxion();
        $db->query("insert into Etudiant (Nom,Prenom,Sexe,tel,Adresse,CIN,CNE,password,Email,DateNaissance,photo,Scan_CIN,Type_Bac,Annee_Bac,Option_Bac,Lycee_Origine,Moy_national,Moy_regional,Mention,Bac,Releve_Bac ,Releve_Reg,Academie,Province,choix1,choix2,choix3)
                    values ('"  . $this->Nom . "','"  . $this->Prenom . "','"  . $this->Sexe . "','"  . $this->tel . "','"  . $this->Adresse. "','"  . $this->CIN . "','"  . $this->CNE . "','"  . $this->password . "','"  . $this->Email . "','"  . $this->DateNaissance . "','"  . $this->photo . "','"  . $this->Scan_CIN . "','"  . $this->Type_Bac . "','"  . $this->Annee_Bac . "','"  . $this->Option_Bac . "','"  . $this->Lycee_Origine . "','"  . $this->Moy_national . "','"  . $this->Moy_regional . "','"  . $this->Mention . "','"  . $this->Bac . "','"  . $this->Releve_Bac . "','"  . $this->Releve_Reg . "','"  . $this->Academie . "','"  . $this->Province . "','"  . $this->choix1 . "','"  . $this->choix2 . "','"  . $this->choix3 . "')" );

                    $db->execute();

        return 0;
    }
    /* public function view($table){
         $select = "SELECT *FROM ".$table."";
         $result = $this->db->query($select);
         $list = array();
         while($data = $result->fetch_array()){
             $list[]=$data;
         }
         return $list;
    }
  public function updateEtu($Nom,$Prenom,$Sexe,$tel,$Adresse,$CIN,$CNE,$password,$Email,$DateNaissance,$photo,$Scan_CIN){
       $db = new conexxion();
       $db->query("update etudiant set Nom='". $this->Nom . "',Prenom='"  . $this->Prenom . "',Sexe='"  . $this->Sexe . "',tel='"  . $this->tel . "',Adresse='"  . $this->Adresse. "',CIN='"  . $this->CIN . "',password='"  . $this->password . "',Email='"  . $this->Email . "',DateNaissance='"  . $this->DateNaissance . "',photo='"  . $this->photo . "',Scan_CIN='"  . $this->Scan_CIN . "' where CNE='"  . $this->CNE . "'" );
       $db->execute();
       return 0;
   }*/

   public function updateEtu($Nom,$Prenom,$Sexe,$tel,$Adresse,$CIN,$CNE,$password,$Email,$DateNaissance,$photo,$Scan_CIN,$TypeBac,$AnneeBac,$OptionBac,$LyceeOrigine,$Moy_national,$Moy_regional,$Mention,$Bac,$Releve_Bac,$Releve_Reg,$Academie,$Province,$choix1,$choix2,$choix3){
    $db = new conexxion();
    $db->query("update etudiant set Nom='". $this->Nom . "',Prenom='"  . $this->Prenom . "',Sexe='"  . $this->Sexe . "',tel='"  . $this->tel . "',Adresse='"  . $this->Adresse. "',CIN='"  . $this->CIN . "',CNE='"  . $this->CNE . "',password='"  . $this->password . "',Email='"  . $this->Email . "',DateNaissance='"  . $this->DateNaissance . "',photo='"  . $this->photo . "',Scan_CIN='"  . $this->Scan_CIN . "','"  . $this->Type_Bac . "','"  . $this->Annee_Bac . "','"  . $this->Option_Bac . "','"  . $this->Lycee_Origine . "','"  . $this->Moy_national . "','"  . $this->Moy_regional . "','"  . $this->Mention . "','"  . $this->Bac . "','"  . $this->Releve_Bac . "','"  . $this->Releve_Reg . "','"  . $this->Academie . "','"  . $this->Province . "','"  . $this->choix1 . "','"  . $this->choix2 . "','"  . $this->choix3 . "' where CNE='"  . $this->CNE . "';" );
    $db->execute();
    return 0;
}


}
