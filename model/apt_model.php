<?php

require_once 'connection.php' ;


class Apt_model{

    public $db  ;

    public function __construct(){

       $this->db = new Connection ; 

    }

    public function insert($data)
    {
        
        $query = "INSERT INTO appointment(date,time,reference_id,consul_type) VALUES ('$data->date','$data->time','$data->reference_id','$data->consul_type')";
        $this->db->query($query);
        return $this->db->execute();
    }
    
    public function read(){

      $query = "SELECT * FROM appointment ";

      $stmt =$this->db->query($query);
       $this->db->execute();
      return $stmt;
    }

    public function delete($data) {

     $query = "DELETE FROM appointment WHERE id = $data->id ";
     $this->db->query($query);
     if($this->db->execute()){

        return true;

     }else{

        return false;

     }
    }


    public function update($data){

       $query = "UPDATE appointment SET date = '$data->date' , time = '$data->time' , reference_id = '$data->reference_id' , consul_type = '$data->consul_type' WHERE id = $data->id ";
       
       $stmt = $this->db->query($query);

      //  die(var_dump($stmt));
       $this->db->execute();
       return $stmt ;



    }



}
