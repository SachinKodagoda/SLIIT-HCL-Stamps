<?php

class Firstdaycover extends BaseController
{
    public function firstdaycover()
    {
        $values = [
            "data" => []
        ];
        $this->view("/".__FUNCTION__, $values);
    }
}
