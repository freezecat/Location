<?php 
$message = $alert ="";
if(isset($_SESSION["firstname"]) && !empty($_SESSION["firstname"]))
{
	//paramètre1 nom de la colonne de la table products
	//paramètre 2:valeur
	$liste = $products->liste("proprietaire",$_SESSION["firstname"]);
	//echo var_dump($liste);
   
}


?>