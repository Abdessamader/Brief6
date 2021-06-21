<?php

require_once "connection.php";

class Register_model
{



    public function insert($data)
    {
        $obj = new Connection();
        $query = "INSERT INTO user(reference,first_name,last_name,age,email,phone_number) VALUES ('$data->reference','$data->first_name','$data->last_name',$data->age,'$data->email',$data->phone_number)";
        $obj->query($query);
        return $obj->execute();
    }
}
