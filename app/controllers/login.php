<?php

class Login extends BaseController
{

    public function login()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
