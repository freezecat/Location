 <?php
 require "../database.php";
 require "../model/Location.class.php";
 $location = new Location();
 
 $id = "";
 
 if(isset($_POST["index"]) && !empty($_POST["index"]))
 {
	 //on convertit $_POST["index"] en entier:
	 $id = intval(htmlentities($_POST["index"]));
     
	 if(is_int($id))
	 {
	
	   $location->retirer($id);
	   //message d'alert
	  echo $message= $location->getMessage();
	   
	   
	 }
	 
	
	 
 }
 ?>