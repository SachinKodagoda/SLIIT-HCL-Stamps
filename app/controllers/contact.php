<?php

class Contact extends BaseController
{
    public function contact()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
