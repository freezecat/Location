<?php 
/*
echo phpinfo();
die();*/
session_start();

if(!isset($_SESSION))
{
$_SESSION["message"]="";
$_SESSION["firstname"]="";
}

require "database.php";

echo "<div style='margin-top:50px;'></div>";

   


	
		
foreach(glob("model/*.php") as $filename)
{
	 if(file_exists($filename))
	 {
		 require $filename;
	 }
}

$products = new Products();
$member = new Member();
$location = new Location();


$page = "";
$folder = "views";
if(isset($_GET["page"]))
{
	
    


 if(is_dir($folder))
	{
		
	
		foreach(glob($folder."/*.php") as $filename)
		{
			$files = substr($filename,strlen($folder)+1);//tous les fichiers dans views
			if($files == htmlentities($_GET["page"]))
			{
				
				$page = $files;
			 // echo $page;
			
				 require 'layout.php';
			}
		 
			
		}
		
		
	}
}
	else 
	{
		$page = "home.php";
		require ("layout.php");//renvoie vers index.php
	}
?>