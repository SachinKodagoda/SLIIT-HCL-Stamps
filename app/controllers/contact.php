<?php

class Contact extends BaseController
{
    public function contact()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
