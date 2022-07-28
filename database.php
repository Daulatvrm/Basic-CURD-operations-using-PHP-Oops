<?php 

class database{

     private $host;
     private $dbusername;
     private $dbpassword;
     private $dbname;
     
     protected function connect(){
        $this->host = 'localhost';
        $this->dbusername = 'root';
        $this->dbpassword ='';
        $this->dbname ='curd';
        $con =  new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);
        if($con->connect_error){
            die("Connection failed".$con->connect_error);
        }
        return $con;
    }
}

?>