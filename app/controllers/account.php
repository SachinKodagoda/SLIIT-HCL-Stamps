<?php

class Account extends BaseController
{
    public function account()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
