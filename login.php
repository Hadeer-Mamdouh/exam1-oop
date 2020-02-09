<?php
session_start();
$servername="localhost";
$dbuser="root";
$dbpassword="";
$dbname="project";   // check your DB name


$mail=$_POST['mail'];
$pass=$_POST['pass'];


$conn= new mysqli ($servername,$dbuser,$dbpassword,$dbname);

if($conn->connect_error)

die("not connect :".$conn->connect_error);
else

{
///query
$query="SELECT * FROM `users`";


$result=$conn->query($query);

if($result->num_rows>0){
   

    while($row=$result->fetch_assoc()){
        
        if($row['email']==$mail && $row['password']==$pass){
            
            echo "found <br>";
            echo "go to <a href='home.php'>HomePage</a>";
        }
        
    }
}

}
