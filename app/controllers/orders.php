<?php

class Orders extends BaseController
{
    public function orders()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
