<?php

class Cart extends BaseController
{
    public function cart()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
