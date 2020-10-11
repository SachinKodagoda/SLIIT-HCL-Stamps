<?php

class Registration extends BaseController
{
    public function registration()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
