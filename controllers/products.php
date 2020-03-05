<?php
$liste = [];
$categorie = "";
$titre = "";
if(isset($_GET["categorie"]))
{
	 
	$categorie = htmlentities($_GET["categorie"]);
	//cf index.php
	
	if(isset($_GET["titre"])){
		$titre = htmlentities($_GET["titre"]);
		
      $produit = $products->produit($categorie,$titre);
	}
	else
	{
		//parametre1: nom de la colonne de la table products
		//paramètre2:valeur.
	$liste = $products->liste("categorie",$categorie);
	
	}
	
	
	
}

 ?>