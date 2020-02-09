<?php 
class Database{
    
    public $servername;
    public $dbuser;
    public $dbpassword;
    public $dbname;
    
    function __construct($serverName,$dbUser,$dbPassword,$dbName){
        
        $this->servername=$serverName;
        $this->dbuser=$dbUser;
        $this->dbpassword=$dbPassword;
        $this->dbname=$dbName;
        
        echo " First line with<br> server name = ".$serverName ." User Name = " . $dbUser." password = " .$dbPassword." Database name = " .$dbName . "<br>";
    }
    
    function getData(){
        
        echo "get data <br>";
    }
    
    function __destruct(){
        echo "last line <br>";
    }
    function myData(){
        echo "hello my data <br>";
    }
}

$newDb=new Database("localhost","Hadeer","12345
","rout-company");
$newDb->myData();