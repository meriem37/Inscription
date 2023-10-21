<?php
$pdo=new PDO("mysql:host=localhost;dbname=inscription",'root','') ;

$cne=$_POST['CNE'];
$pass=$_POST['password'];

$pdostat = $pdo->prepare("select * from etudiant where CNE=:CNE and password=:password") ;
					$pdostat->execute(array(":CNE"=>$cne,":password"=>$pass)) ;
					if($pdostat->fetch()){
                     header("location: modifier1.php?CNE=$cne");
                    }
                    else{
                         header("location: modifier1.php?CNE=$cne");
                    }
?>

