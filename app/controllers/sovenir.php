<?php

class Sovenir extends BaseController
{
    public function sovenir()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
