<?php

class Stamp extends BaseController
{
    public function stamp()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
