<?php

require_once './model/apt_model.php' ;

class Appointment {


    public function insert()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $obj = new Apt_model();
            $data = json_decode(file_get_contents("php://input"));
            
            // file_get_contents()     THIS function per default receives data as POST method 


            if ($obj->insert($data))
                echo json_encode("success");
        }
        else
        {
            echo json_encode(["error" =>"use Post method"]);
        }

    }

    public function read(){

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $obj = new Apt_model();        
            // file_get_contents()     THIS function per default receives data as POST method 


            if ($obj->read()->rowCount() > 0)
                echo json_encode($obj->read()->fetchAll(PDO::FETCH_ASSOC));
        }
        else
        {
            echo json_encode(["error" =>"use GET method"]);
        }

    }

    public function delete(){


        if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {
            $obj = new Apt_model();        
            // file_get_contents()     THIS function per default receives data as POST method 
            $data = json_decode(file_get_contents("php://input"));

            if ($obj->delete($data))
                echo json_encode("deleted");
        }
        else
        {
            echo json_encode(["error" =>"use Delete method"]);
        }
    }


    public function update(){

        if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
            $obj = new Apt_model();        
            // file_get_contents()     THIS function per default receives data as POST method 
            $data = json_decode(file_get_contents("php://input"));
           
            if ($obj->update($data))
                echo json_encode("updated");
        }
        else
        {
            echo json_encode(["error" =>"use Put method"]);
        }
    }


    





}