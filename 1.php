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
///query
$query="SELECT * FROM `products`";

$result=$conn->query($query);

if($result->num_rows>0){
    echo " productNumber || productName || price || quantity <br>";
    while($row=$result->fetch_assoc()){
        
        echo $row["productNumber"] . "||" . $row["productName"]. "||" . $row["price"]. "||" . $row["quantity"]."  ";
        
        echo " <a href='edit-form.php'>Edit</a>";
        echo "<br>";
    }
}

}


?>