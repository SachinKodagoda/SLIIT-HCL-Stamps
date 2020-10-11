<?php

class Account extends BaseController
{
    public function account()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
