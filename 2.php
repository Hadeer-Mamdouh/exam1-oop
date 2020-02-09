<?php
session_start();
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="project";   // check your DB name



$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);
$keyword=$_GET['keyword'];

if($conn->connect_error)

die("not connect :".$conn->connect_error);
else

{
///query
$query="SELECT productName 
from products 
where productName like'%$keyword%'";


$result=$conn->query($query);

if($result->num_rows>0){
    echo " productName <br>";
    $_SESSION['productName']=$result;

    while($row=$result->fetch_assoc()){
        
        echo "<a href='search.php'> ".$row['productName'] . "</a>" . "  " ;
    }
}

}


?>