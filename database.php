<?php
try
{
//$pdo = new PDO("mysql:host=localhost;dbname=location","root","");

//$pdo = new PDO('pgsql:host=localhost;port:5432;dbname=location', 'root', 'YuhUJgGjBGyu@!');
//$pdo = pg_connect("host");
$pdo = new PDO("pgsql:host=postgresql-freezecat.alwaysdata.net;dbname=freezecat_location;user=freezecat;password=hNkkygR56#kof?");
}
catch(PDOException $e)
{
	echo $e->getMessage();
	die("");
}
?>