<?php

session_start();
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="project";   // check your DB name

$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);

if($conn->connect_error)

die("not connect :".$conn->connect_error);
else

{
    
  $id=$_GET['id'];
  
///query
$query="DELETE FROM products
WHERE productNumber='$id'";


$result=$conn->query($query);


}


