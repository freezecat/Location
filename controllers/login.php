<?php 
$email = $password =  "";
$message = "";
$alert = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(!empty($_POST["email"]) && !empty($_POST["password"]))
	{
		$email = htmlentities(trim($_POST["email"]));
	$password = htmlentities(trim($_POST["password"]));
	    $login = $member->login($email,$password);
	
		//echo var_dump($login)."<br/>";
		
		if(!empty($login)){
			
		
		if( trim($login->email) == $email && ( trim($login->password) == sha1($password)) )
		{
		
			$_SESSION["firstname"] = $login->firstname;
						$message = "Bienvenu ".$login->firstname."!";
						$_SESSION["message"] = $message;
						header("Location:index.php?home.php");
		}
		
	
		
	}
	else
	{
		$message = "Identifiants incorrect";
		$alert = "alert-danger";
	}
	}
	else
	{
		$message = "remplissez toutes les cases.";
		$alert = "alert-danger";
	}
}

?>