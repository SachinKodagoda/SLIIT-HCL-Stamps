<?php

class Account extends BaseController
{
    public function index()
    {
        $values = [
            "data" => []
        ];
        $this->view(strtolower(basename(__FILE__, '.php'))."/".__FUNCTION__, $values);
    }
}
