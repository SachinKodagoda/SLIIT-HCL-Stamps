<?php

class Orders extends BaseController
{
    public function orders()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view("/".__FUNCTION__, $data);
    }
}
