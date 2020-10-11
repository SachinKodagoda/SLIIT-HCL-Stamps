<?php

class Registration extends BaseController
{
    public function registration()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
