<?php

class Stamp extends BaseController
{
    public function stamp()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
