<?php

class Home extends BaseController
{
    public function home()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}

