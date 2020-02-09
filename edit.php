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
  $name=$_GET['name'];
  $price=$_GET['price'];
  $quantity=$_GET['quantity'];
///query
$query="UPDATE products
set productName='$name',price='$price',quantity='$quantity'
WHERE productNumber='$id'";


$result=$conn->query($query);


}


