<?php

require_once './model/Login_model.php';


class Login
{


    public function check_ref()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = json_decode(file_get_contents("php://input"));
            $obj = new Login_model();
            if ($obj->check_ref($data) > 0) {
                echo json_encode(['success ' => 'ref is valid']);
            } else {
                echo json_encode(['error' => 'ref isn\'t valid']);
            }
        } else {
            echo json_encode(["error" => "use Post method"]);
        }
    }
}
