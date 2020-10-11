<?php

class Sovenir extends BaseController
{
    public function sovenir()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
