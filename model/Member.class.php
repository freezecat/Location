<?php 
class Member
{
	
	public function register($firstname,$lastname,$email,$password,$adresse,$city,$zip,$pays)
	{
		global $pdo;
		
		$sql ="SELECT COUNT(*) as c FROM register WHERE email =:email";
		$req = $pdo->prepare($sql);
		$req->execute(array(
		":email"=>$email
		));
		$count = $req->fetch(PDO::FETCH_OBJ);
		$req->closeCursor();
		
		if($count->c == 1)
		{
			 $this->message = "vous êtes déjà inscrit (email déjà utilisé).";
			 $this->alert = "alert-danger";
		}
		else
		{
		$sql = "INSERT INTO register(firstname,lastname,email,password,adresse,ville,zip,pays) VALUES(:firstname,:lastname,:email,:password,:adresse,:ville,:zip,:pays)";
		$req = $pdo->prepare($sql);
		
		$req->execute(array(
		":firstname"=>$firstname,
		":lastname"=>$lastname,
		":email"=>$email,
		":password"=>$password,
		":adresse"=>$adresse,
		":ville"=>$city,
		":zip"=>$zip,
		":pays"=>$pays
		));
		
		$req->closeCursor();
		
		$sql="SELECT * FROM register";
		$req = $pdo->prepare($sql);
		$req->execute();
		$req->closeCursor();
		     $this->message = "Félicitation! vous êtes inscrit.";
			 $this->alert = "alert-success";
		}
	}
    public function getMessage()
	{
		return $this->message;
	}	
	 public function getAlert()
	{
		return $this->alert;
	}
	
	//login!!
	public function login($email,$password){
		global $pdo;
		$sql = "SELECT * FROM register WHERE email=:email and password=:password";
		$req = $pdo->prepare($sql);
		$req->execute(array(
		":email"=>$email,
		":password"=>sha1($password)
		));
		$get = $req->fetch(PDO::FETCH_OBJ);
		$req->closeCursor();
		return $get;
	}
}
?>