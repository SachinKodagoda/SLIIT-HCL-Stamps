<?php

class ForgotPassword extends BaseController
{

    public function index()
    {
        $data = [
            'page' => __FUNCTION__
        ];
        $this->view(strtolower(__CLASS__),__FUNCTION__, $data);
    }
}
