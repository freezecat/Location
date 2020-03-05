<?php 
$firstname = $lastname = $email = $password = $adresse = $city = $zip = $pays = "";
$message = "";
$alert = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	//echo var_dump($_POST);
	
	if(!empty($_POST["firstname"]) && !empty($_POST["lastname"]) && !empty($_POST["email"]) && !empty($_POST["password"]) && !empty($_POST["adresse"]) && !empty($_POST["ville"]) && !empty($_POST["zip"]) && !empty($_POST["pays"]))
	{
	$firstname = htmlentities(trim($_POST["firstname"]));
    $lastname = htmlentities(trim($_POST["lastname"]));
	$email = htmlentities(trim($_POST["email"]));//filter email!!
	$password = htmlentities(sha1(trim($_POST["password"])));
    $adresse = htmlentities($_POST["adresse"]);
	$city = htmlentities(trim($_POST["ville"]));
	$zip = htmlentities(trim($_POST["zip"]));//filter integer!!
	$pays = htmlentities(trim($_POST["pays"]));
	
	if (filter_var($zip, FILTER_VALIDATE_INT)) {
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
       //requete
	   	//echo $firstname." ".$lastname." ".$email." ".$password." ".$adresse." ".$city." ".$zip." ".$pays."<br/>";
		//verif si un compte a déjà été crée.
		//sinon
		$member->register($firstname,$lastname,$email,$password,$adresse,$city,$zip,$pays);
		
		$message =  $member->getMessage();
		$alert = $member->getAlert();
		
    }
	 
	
	else{
		$message = "Email non valide.";
		$alert = "alert-danger";
	}
	
    }
	else{
		 $message= "Le code postal doit être un entier.";
		 $alert = "alert-danger";
	}
	
	  
	

	}
	else{
		 $message ="Remplissez toutes les cases.";
		 $alert ="alert-danger";
	}
}

?>