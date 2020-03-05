<?php 
$titre = $description = $prix = $categorie = $message = $alert = "";
$date = date("Y-m-d H:i:s");

function plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert){
	global $location;
	
		    
			$location->add($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date);
			
			
}

if(isset($_SESSION["firstname"]) && !empty($_SESSION["firstname"])){
	$proprietaire = $_SESSION["firstname"];
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$titre = htmlentities(trim($_POST["titre"]));
	$description = htmlentities(trim($_POST["description"]));
	$prix = htmlentities(trim($_POST["prix"]));
	$categorie = htmlentities(trim($_POST["categorie"]));
	if(!empty($titre) && !empty($description) && !empty($prix) && $categorie!="Choose..."){
		switch($categorie)
		{
			case "film":
			$image = "dvd.png";
			$author= "Clker-Free-Vector-Images";
			$link = "https://pixabay.com/fr/users/Clker-Free-Vector-Images-3736/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=27792";
			plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			$message = $location->getMessage();
			$alert = $location->getAlert();
			break;
			
			case "mobilier":
			$image = "table.jpg";
			$author= "Stefano Ferrario";
			$link = "https://pixabay.com/fr/users/sferrario1968-214554/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1827837";
			plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			$message = $location->getMessage();
			$alert = $location->getAlert();
			break;
			
			case "livre":
			$image = "livres.jpg";
			$author= "Pexels";
			$link = "https://pixabay.com/fr/users/Pexels-2286921/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1283865";
		    plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			$message = $location->getMessage();
			$alert = $location->getAlert();
			break;
			
			case "instrument":
			$image = "cello.jpg";
			$author= "PIRO4D";
			$link = "https://pixabay.com/fr/users/PIRO4D-2707530/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=2830670";
			plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			$message = $location->getMessage();
			$alert = $location->getAlert();
			break;
			
			case "hightech":
			$image = "hightech.jpg";
			$author= "Gerd Altmann ";
			$link = "https://pixabay.com/fr/users/geralt-9301/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=1917737";
			plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			$message = $location->getMessage();
			$alert = $location->getAlert();
			break;
			
			
			case "sport":
			$image = "basketball.jpg";
			$author= "tookapic";
			$link = "https://pixabay.com/fr/users/tookapic-1386459/?utm_source=link-attribution&amp;utm_medium=referral&amp;utm_campaign=image&amp;utm_content=933173";
			plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			$message = $location->getMessage();
			$alert = $location->getAlert();
			break;
            
			plus($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date,$message,$alert);
			
			
			
           
	   }
	}
	else
	{
		$message = "remplissez toutes les cases et choisir une case!";
		$alert = "alert-danger";
	}
}
}
else{
	$message = "FORBIDDEN!accès interdit.";
	$alert = "alert-danger";
}
?>