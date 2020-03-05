<?php 
class Products
{
	/*
	public function __construct($categorie)
	{
		$this->categorie = $categorie;
	}
	*/
	public function liste($column,$value)
	{
		global $pdo;
		$tab = [];
		$sql = "SELECT * FROM products WHERE ".$column." = :".$column;
		$req = $pdo->prepare($sql);
		$req->execute(array(
		':'.$column=>$value
		));
		
		while($get = $req->fetch(PDO::FETCH_OBJ))
		{
			$tab[] = $get;
		}
		$req->closeCursor();
		return $tab;
	
	}
		public function produit($categorie,$titre)
	{
		global $pdo;
		$sql = "SELECT * FROM products WHERE categorie = :categorie and titre=:titre";
		$req = $pdo->prepare($sql);
		$req->execute(array(
		':categorie'=>$categorie,
		':titre'=>$titre
		));
		
		$produit = $req->fetch(PDO::FETCH_OBJ);
		$req->closeCursor();
		return $produit;
		
	}
	
}
?>
