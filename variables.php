<?php
$environment=$_SERVER['SERVER_NAME'];
$server="localhost";
$base_url="";
if($environment=="localhost"){
  $user="root";
  $password="";
  $database="meWriter";  
  $base_url=$environment."/".$database;

}

$connection=mysqli_connect($server,$user,$password,$database) or die("NO server and database");


?>
