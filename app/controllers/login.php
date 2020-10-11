<?php

class Login extends BaseController
{

    public function login()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
