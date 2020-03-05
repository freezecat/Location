<?php 
class Location 
{
	public function add($titre,$image,$author,$link,$description,$categorie,$prix,$proprietaire,$date)
	{
		global $pdo;
		
		$sql = "INSERT INTO products(author,categorie,description,image,link,mise_en_ligne,prix,proprietaire,titre) VALUES(:author,:categorie,:description,:image,:link,:mise_en_ligne,:prix,:proprietaire,:titre)";
		$req = $pdo->prepare($sql);
		$req->execute(array(
		":author"=>$author,
		":categorie"=>$categorie,
		":description"=>$description,
		":image"=>$image,
		":link"=>$link,
		":mise_en_ligne"=>$date,
		":prix"=>$prix,
		":proprietaire"=>$proprietaire,
		":titre"=>$titre
		));
		$req->closeCursor();
		
		$this->message = "Votre location a été mis en ligne avec succès!";
		$this->alert = "alert-success";
	}
	
	
	//utiliser une class mère avec cette function pour extends avec ses enfants!
	public function getMessage(){
		return $this->message;
	}
	
	public function getAlert(){
		return $this->alert;
	}
	
	public function retirer($id){
		global $pdo;
		
		
		$sql = "DELETE FROM products WHERE id=:id";
		$req = $pdo->prepare($sql);
		$req->execute(array(
		":id"=>$id
		));
		$req->closeCursor();
			
		$this->message = "Votre article a ete retire de la location.";
	
	}
	
}
	



?>