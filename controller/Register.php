<?php

require_once './model/Register_model.php';

class Register
{






    public function index()
    {
        
    }


    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $obj = new Register_model();
            $data = json_decode(file_get_contents("php://input"));
            
            // file_get_contents()     THIS function per default receives ( get ) data as POST method 


            if ($obj->insert($data))
                echo json_encode("success");
        }
        else
        {
            echo json_encode(["error" =>"use Post method"]);
        }

    }
}
