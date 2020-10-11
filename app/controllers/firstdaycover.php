<?php

class Firstdaycover extends BaseController
{
    public function firstdaycover()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
