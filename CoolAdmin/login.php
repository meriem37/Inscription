<!DOCTYPE html>
<html>
<head>
	<title>Authentification</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
	    <div class="main">
   			<div class="login">
				 <form method="POST"> 
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="Email_Admin" placeholder="Email" required="">
					<input type="password" name="password_Admin" placeholder="Password" required="">
					<button type="submit" name="Login">Login</button>
				</form>
			</div>
			  	
	 </div>
 </body>
</html>
<?php

if(isset($_POST['Login']))
{


if($_POST['Email_Admin']="Alami@gmail.com" and $_POST['password_Admin']=="Alami") {
    header('Location: index.php');
}else{
    header('Location: Login.php');
}
}

?>