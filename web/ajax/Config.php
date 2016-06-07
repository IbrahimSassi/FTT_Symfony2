<?php

class Config{
    
    public function connexion (){
        
        $servername="localhost";
        $username="root";
        $password="";
        $dbname="ftt";
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        
        return $conn;
        
    }
    
}

?>