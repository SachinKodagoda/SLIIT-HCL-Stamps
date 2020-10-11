<?php

class Postcard extends BaseController
{
    public function postcard()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
