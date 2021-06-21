<?php

require_once "connection.php";

class Login_model
{


    public function check_ref($data){


        $obj = new Connection();
        $query = "SELECT reference FROM user where reference = '$data->reference'";
        $stmt = $obj->query($query);

        
        $obj->execute();
        $num = $stmt->rowCount();
        return $num ;


    }












}











?>