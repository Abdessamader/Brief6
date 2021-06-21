<?php 


class Connection {

     public $host = 'localhost';
     public $dbname = 'appointment';
     public $user   = 'root' ;
     public $password = '' ;

     private $sql ;
     public  $stmt ;


     public function  __construct(){


      try{

          $this->sql = new PDO("mysql:host=$this->host;dbname=$this->dbname",$this->user,$this->password);

      }catch(PDOException $e){

         echo 'connextion failed ' . $e->getMessage();

      }

     }


     public function query($query)
     {
        $this->stmt = $this->sql->prepare($query);
         return $this->stmt;
     }

     public function execute()
     {
         return $this->stmt->execute();
     }





}























?>