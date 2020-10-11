<?php

class Home extends BaseController
{
    public function home()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}


