<?php

class Postcard extends BaseController
{
    public function postcard()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
