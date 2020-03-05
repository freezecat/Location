<?php
session_destroy();
$_SESSION["firstname"]="";
$_SESSION["message"]="";

header("Location:index.php");
 ?>